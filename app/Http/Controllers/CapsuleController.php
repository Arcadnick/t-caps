<?php

namespace App\Http\Controllers;

use App\Models\Capsule;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Services\GptCapsuleService;
use App\Models\GptCapsuleResponse;

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

//        $capsules = Capsule::where('category_id', $category->id)
//            ->where('is_blocked', false)
//            ->get();
        $capsules = Capsule::where('is_blocked', false)->get();

        $capsuleMap = $capsules->mapWithKeys(function ($item) {
            return [
                $item->id => [
                    'image' => $item->image,
                    'slug' => $item->slug,
                    'landing_url' => $item->landing_url,
                ],
            ];
        })->toArray();

        $regenerate = $request->get('regenerate');
        $gptService = app(GptCapsuleService::class);

        // Если регенерация запрошена или нет вообще капсул по данной сфере — генерируем
//        if ($regenerate || !GeneratedCapsule::where('category_id', $category->id)->where('user_input', $industry)->exists()) {
//            $finalCapsules = $gptService->generateCapsule($category->name, $industry);
//        } else {
//            // Просто берём последние 9 подходящих (если они уже есть)
//            $generatedCapsules = GeneratedCapsule::where('category_id', $category->id)
//                ->where('user_input', $industry)
//                ->where('is_blocked', false)
//                ->latest()
//                ->take(9)
//                ->get();
//
//            $finalCapsules = $generatedCapsules->map(function ($item) {
//                $data = json_decode($item->gpt_response_json, true);
//                $data['title'] = $item->title;
//                return $data;
//            })->shuffle()->values()->all();
//        }

        if ($regenerate || !GptCapsuleResponse::where('category_id', $category->id)->where('user_input', $industry)->exists()) {
            $finalCapsules = $gptService->generateCapsule($category->name, $industry);
        } else {
            $response = GptCapsuleResponse::where('category_id', $category->id)
                ->where('user_input', $industry)
                ->latest()
                ->first();

            $data = $response->response_json;

            $finalCapsules = is_array($data) ? $data : json_decode($data ?? '[]', true);
            $finalCapsules = collect($finalCapsules)->shuffle()->values()->all();
        }

        return view('capsules-page', [
            'capsules' => $capsules,
            'category' => $category,
            'industry' => $industry,
            'final' => $finalCapsules,
            'capsuleMap' => $capsuleMap,
        ]);
    }

    public function showDefault($slug)
    {
        $capsule = Capsule::where('slug', $slug)
            ->where('use_default_page', true)
            ->firstOrFail();

        return view('capsule-in-development', [
            'capsule' => $capsule,
            'price' => $capsule->default_price,
            'integrations' => $capsule->default_integrations,
        ]);
    }
}
