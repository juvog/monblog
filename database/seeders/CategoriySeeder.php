<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Category;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Category::factory(5)->create([
            'icon'=> 'address-book'
        ]);
    }
}
