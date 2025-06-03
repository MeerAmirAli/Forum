<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::Get('database/json/category.json');
        $category = collect(json_decode($json));

        $category->each(function($categories){
            Category::create([
                'name' => $categories->name
            ]);
        });

    }
}
