<?php

namespace App\Services;

use App\Models\Capsule;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use App\Models\Category;
use App\Models\GeneratedCapsule;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Http\Client\RequestException;

class GptCapsuleService
{
    public function generateCapsule(string $categoryName, string $industry): array
    {
        $category = Category::where('name', $categoryName)->first();

        $ready = Capsule::where('category_id', $category->id)
            ->where('type', 'готовая')
            ->where('is_blocked', false)
            ->get(['title', 'content', 'type','image']);

        $planned = Capsule::where('category_id', $category->id)
            ->where('type', 'в планах')
            ->where('is_blocked', false)
            ->get(['title', 'content', 'type','image']);

        $generated = GeneratedCapsule::where('category_id', $category->id)
            ->where('user_input', $industry)
            ->where('is_blocked', false)
            ->get(['title', 'gpt_response_json'])
            ->map(function ($item) {
                $parsed = json_decode($item->gpt_response_json, true);
                return [
                    'title' => $item->title,
                    'content' => $parsed['description'] ?? '',
                    'type' => 'сгенерированная',
                ];
            });

        $allCapsules = collect(
            $ready->map(function ($item) {
                return [
                    'title' => $item->title,
                    'content' => $item->content,
                    'type' => $item->type,
                ];
            })->toArray()
        )->merge(
            $planned->map(function ($item) {
                return [
                    'title' => $item->title,
                    'content' => $item->content,
                    'type' => $item->type,
                ];
            })->toArray()
        )->merge($generated);

        $capsuleText = $allCapsules->map(function ($capsule, $i) {
            return ($i + 1) . ". [{$capsule['type']}] {$capsule['title']}: {$capsule['content']}";
        })->implode("\n");

        $prompt = <<<PROMPT
Категория: $categoryName
Сфера деятельности пользователя: $industry

Вот список всех существующих AI-капсул в этой категории:

$capsuleText

1. Отсортируй капсулы по релевантности сфере "$industry"
2. Сначала покажи готовые, потом "в планах", затем "сгенерированные"
3. Если в результате получится менее 6 капсул — добавь ещё 3 новых, которых нет в списке выше

Для каждого процесса укажи:
- Название
- Краткое описание (80 символов)
- Преимущества (26 символов в строке максимум)
- Что автоматизирует (26 символов в строке максимум)
- Среднее количество часов, которое тратит человек в неделю (число)
- Приблизительно на сколько процентов эффективнее будет использовать капсулу (число)

если ты взял капсулу из массива из предоставленного, то она должна соответствовать type: готова.
в ответ не пиши ничего кроме json

Формат: JSON массив:
[
  {
    "title": "..."
    "description": "..."
    "advantages": "Экономит время, улучшает качество"
    "automates": "Создание контента"
    "average_hours_per_week":
    "efficiency_percentage":
    "type": "готовая" | "в планах" | "сгенерированная"
  },
  ...
]
PROMPT;

        try {
            set_time_limit(90);

            $response = Http::withToken(env('OPENAI_API_KEY'))
                ->timeout(90)
                ->post('https://api.openai.com/v1/chat/completions', [
                    'model' => 'gpt-4',
                    'messages' => [
                        ['role' => 'system', 'content' => 'Ты ассистент по подбору AI-капсул'],
                        ['role' => 'user', 'content' => $prompt],
                    ],
                    'temperature' => 0.7,
                ]);

            $json = $response->json();
            $content = $json['choices'][0]['message']['content'] ?? '';

            if (empty($content)) {
                Log::error('Empty GPT response', ['json' => $json]);
                return [];
            }

            $capsules = json_decode($content, true);

            if (json_last_error() !== JSON_ERROR_NONE) {
                Log::error('Invalid GPT JSON response', [
                    'error' => json_last_error_msg(),
                    'content' => $content
                ]);
                return [];
            }

            $readyMap = $ready->keyBy('title');
            $plannedMap = $planned->keyBy('title');

            foreach ($capsules as &$capsule) {
                if ($capsule['type'] === 'готовая' && isset($readyMap[$capsule['title']])) {
                    $capsule['image'] = $readyMap[$capsule['title']]->image;
                }
                if ($capsule['type'] === 'в планах' && isset($plannedMap[$capsule['title']])) {
                    $capsule['image'] = $plannedMap[$capsule['title']]->image;
                }
            }
            unset($capsule);

            Log::info('GPT response successful', ['category' => $categoryName, 'industry' => $industry]);

            return [
                'selected_capsules' => $capsules,
                'raw' => $content,
                'from' => [
                    'ready' => $ready->count(),
                    'planned' => $planned->count(),
                    'generated' => $generated->count(),
                ]
            ];

        } catch (ConnectionException $e) {
            Log::error('GPT connection timeout', ['message' => $e->getMessage()]);
            return [];
        } catch (RequestException $e) {
            Log::error('GPT API request error', [
                'message' => $e->getMessage(),
                'response' => optional($e->response)->body()
            ]);
            return [];
        } catch (\Throwable $e) {
            Log::critical('Unexpected error in GPTCapsuleService', ['message' => $e->getMessage()]);
            return [];
        }
    }
}
