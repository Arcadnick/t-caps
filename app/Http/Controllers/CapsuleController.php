<?php

namespace App\Http\Controllers;

use App\Models\Capsule;
use App\Models\Category;
use App\Models\GeneratedCapsule;
use Illuminate\Http\Request;
use App\Services\GptCapsuleService;

class CapsuleController extends Controller
{
    public function index(Request $request)
    {
        $categoryName = $request->get('category');
        $industry = $request->get('industry');

        if (!$categoryName || !$industry) {
            return redirect()->route('home')->with('error', 'Пожалуйста, выберите категорию и введите сферу.');
        }

        // Получаем категорию
        $category = Category::where('name', $categoryName)->first();

        if (!$category) {
            return redirect()->route('home')->with('error', 'Категория не найдена.');
        }

        // Получаем готовые капсулы
        $capsules = Capsule::where('category_id', $category->id)
//            ->where('type', 'готовая')
            ->where('is_blocked', false)
            ->get();

        // Ищем уже сгенерированные
        $existingGeneration = GeneratedCapsule::where('category_id', $category->id)
            ->where('user_input', $industry)
            ->first();

        // Если нет — генерируем
        if (!$existingGeneration) {
            $gptService = app(GptCapsuleService::class);
            $response = $gptService->generateCapsule($category->name, $industry);

            $existingGeneration = GeneratedCapsule::create([
                'title' => $response['title'],
                'category_id' => $category->id,
                'user_input' => $industry,
                'gpt_response_json' => json_encode($response),
            ]);
        } else {
            $existingGeneration->increment('used_count');
        }

        return view('capsules-page', [
            'capsules' => $capsules,
            'generated' => $existingGeneration,
            'industry' => $industry,
            'category' => $category,
        ]);
    }
}
