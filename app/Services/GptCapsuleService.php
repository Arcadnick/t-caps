<?php

namespace App\Services;

use App\Models\Capsule;
use App\Models\Category;
use App\Models\GeneratedCapsule;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Http\Client\RequestException;

class GptCapsuleService
{
    public function generateCapsule(string $categoryName, string $industry): array
    {
        Log::info('Starting GPT generation...', ['category' => $categoryName, 'industry' => $industry]);

        $category = Category::where('name', $categoryName)->firstOrFail();

        $allCapsules = Capsule::where('is_blocked', false)->get(['id', 'title', 'content', 'type', 'image', 'category_id']);
        $generatedCapsules = GeneratedCapsule::where('is_blocked', false)->get(['id', 'title', 'gpt_response_json', 'category_id']);

        $allCapsulesText = $allCapsules->take(10)->map(function ($item, $i) {
            return ($i + 1) . ". [{$item->type}] {$item->title}: {$item->content}";
        })->implode("\n");

        $prompt = <<<PROMPT
Ты AI-ассистент, который помогает подбирать капсулы автоматизации.

Категория: $categoryName
Сфера деятельности пользователя: $industry

Вот список всех существующих AI-капсул из всех категорий:

$allCapsulesText

1. Из них выбери 2–4 капсулы, которые максимально подходят под сферу "$industry".
   Если в текущей категории мало подходящих, выбери из других, максимально похожих по смыслу.
   Формат ответа:
[
  {
    "capsule_id": "...",
    "description": "...",
    "advantages": "...",
    "automates": "...",
    "average_hours_per_week": ...,
    "efficiency_percentage": ...
  }
]

2. Если получилось меньше 9 капсул — сгенерируй недостающие капсулы (до 9 в сумме).
   Убедись, что они отличаются от существующих.
   Формат сгенерированных:
[
  {
    "title": "...",
    "description": "...",
    "advantages": "...",
    "automates": "...",
    "average_hours_per_week": ...,
    "efficiency_percentage": ...,
    "type": "сгенерированная"
  }
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

            Log::info('GPT responded');

            $json = $response->json();
            $content = $json['choices'][0]['message']['content'] ?? '';

            if (empty($content)) {
                Log::error('Empty GPT response', ['json' => $json]);
                return [];
            }

            $sections = preg_split('/(?<=\])\s*\n(?=\[)/', trim($content));
            $recommended = json_decode($sections[0] ?? '[]', true);
            $generated = json_decode($sections[1] ?? '[]', true);

            if (json_last_error() !== JSON_ERROR_NONE) {
                Log::error('Invalid GPT JSON response', ['error' => json_last_error_msg(), 'content' => $content]);
                return [];
            }

            foreach ($generated as $gen) {
                $exists = GeneratedCapsule::where('title', $gen['title'])
                    ->where('user_input', $industry)
                    ->where('category_id', $category->id)
                    ->first();

                if ($exists) {
                    $exists->increment('used_count');
                } else {
                    GeneratedCapsule::create([
                        'title' => $gen['title'],
                        'category_id' => $category->id,
                        'user_input' => $industry,
                        'gpt_response_json' => json_encode($gen),
                        'used_count' => 1,
                        'is_blocked' => false,
                    ]);
                }
            }

            $final = collect($recommended)->merge($generated);
            return $final->shuffle()->values()->all();

        } catch (ConnectionException $e) {
            Log::error('GPT connection timeout', ['message' => $e->getMessage()]);
            return [];
        } catch (RequestException $e) {
            Log::error('GPT API request error', [
                'message' => $e->getMessage(),
                'response' => optional($e->response)->body(),
            ]);
            return [];
        } catch (\Throwable $e) {
            Log::critical('GPT FAIL', ['msg' => $e->getMessage(), 'trace' => $e->getTraceAsString()]);
            Log::critical('Unexpected error in GPTCapsuleService', ['message' => $e->getMessage()]);
            return [];
        }
    }
}
