<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $categories = [
            ['name' => 'Продажи', 'slug' => 'sales'],
            ['name' => 'Контент', 'slug' => 'marketing'],
            ['name' => 'Рекрутинг', 'slug' => 'recruiting'],
            ['name' => 'Бизнес', 'slug' => 'business'],
            ['name' => 'IT', 'slug' => 'it'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
