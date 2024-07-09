<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
            'color' => 'blue',
        ]);
        Category::create([
            'name' => 'Web Development',
            'slug' => 'web-development',
            'color' => 'green',
        ]);
        Category::create([
            'name' => 'UI/UX',
            'slug' => 'ui-ux',
            'color' => 'purple',
        ]);
        Category::create([
            'name' => 'AI and Mechine Learning',
            'slug' => 'ai-and-mechine-learning',
            'color' => 'red',
        ]);
    }
}
