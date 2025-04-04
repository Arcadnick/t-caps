<?php

namespace App\Services;

use App\Models\Capsule;
use Illuminate\Support\Facades\Http;

class GptCapsuleService
{
    public function generateCapsule(string $categoryName, string $industry): array
    {
        $examples = Capsule::whereHas('category', fn($q) => $q->where('name', $categoryName))
            ->where('is_blocked', false)
            ->take(3)
            ->get(['title', 'content']);

        $examplesText = $examples->map(function ($capsule, $i) {
            return ($i + 1) . ". {$capsule->title}: {$capsule->content}";
        })->implode("\n");

        $prompt = <<<PROMPT
Ты — AI-ассистент, который генерирует идеи для автоматизации бизнес-процессов.

Категория: $categoryName
Сфера бизнеса: $industry

Примеры существующих AI-капсул:
$examplesText

Сгенерируй 4-6 новых процессов, которые можно автоматизировать в этой категории и сфере.
Для каждого процесса укажи:
- Название
- Краткое описание (80 символов)
- Преимущества(26 символов в строке максимум)
- Что автоматизирует(26 символов в строке максимум)
- Среднее количество часов, которое тратит человек в неделю (число)
- Приблизительно на сколько процентов эффективнее будет использовать капсулу (число)

Ответ в JSON:
[
  {
    "title": "...",
    "description": "...",
    "benefits": "..."
  },
  ...
]
PROMPT;

        $response = Http::withToken(env('OPENAI_API_KEY'))
            ->timeout(600)
            ->post('https://api.openai.com/v1/chat/completions', [
            'model' => 'gpt-4',
            'messages' => [
                ['role' => 'system', 'content' => 'Ты помощник, генерирующий AI-капсулы'],
                ['role' => 'user', 'content' => $prompt],
            ],
            'temperature' => 0.7,
        ]);

        $json = $response->json();

        $gptText = $json['choices'][0]['message']['content'] ?? null;
        $capsules = json_decode($gptText, true);

        return [
            'title' => $capsules[0]['title'] ?? 'Новая AI-капсула',
            'description' => $capsules[0]['description'] ?? '',
            'benefits' => $capsules[0]['benefits'] ?? '',
            'all' => $capsules,
            'raw' => $gptText,
        ];
    }
}
