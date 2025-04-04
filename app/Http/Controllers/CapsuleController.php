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
            return redirect()->route('welcome')->with('error', 'Пожалуйста, выберите категорию и введите сферу.');
        }

        $category = Category::where('name', $categoryName)->first();

        if (!$category) {
            return redirect()->route('welcome')->with('error', 'Категория не найдена.');
        }

        $capsules = Capsule::where('category_id', $category->id)
            ->where('is_blocked', false)
            ->get();

        $regenerate = $request->get('regenerate');

        $existingGeneration = GeneratedCapsule::where('category_id', $category->id)
            ->where('user_input', $industry)
            ->first();

        if ($regenerate || !$existingGeneration) {
            $gptService = app(GptCapsuleService::class);
            $response = $gptService->generateCapsule($category->name, $industry);

            GeneratedCapsule::create([
                'title' => $response['selected_capsules'][0]['title'] ?? 'AI-капсулы',
                'category_id' => $category->id,
                'user_input' => $industry,
                'gpt_response_json' => json_encode($response),
            ]);

            $existingGeneration = GeneratedCapsule::where('category_id', $category->id)
                ->where('user_input', $industry)
                ->orderByDesc('created_at')
                ->first();
        } else {
            $existingGeneration->increment('used_count');
        }

        $decoded = json_decode($existingGeneration->gpt_response_json, true);
        $sortedCapsules = $decoded['selected_capsules'] ?? [];

        return view('capsules-page', [
            'capsules' => $capsules, // необязательные, если используешь только gpt
            'generated' => $existingGeneration,
            'sortedCapsules' => $sortedCapsules,
            'industry' => $industry,
            'category' => $category,
        ]);
    }
}
