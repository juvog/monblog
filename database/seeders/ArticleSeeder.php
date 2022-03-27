<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Models\Article;
use App\Models\Category;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = Category::get()->each(function($category){
            \App\Models\Article::factory(5)->create([
                'category_id'=> $category->id
            ]);
        });

    }
}
