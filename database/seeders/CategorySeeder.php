<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::query()->insert([
            [
                "id" => 1,
                "name" => "Fantasy"
            ],
            [
                "id" => 2,
                "name" => "Novel"
            ],
            [
                "id" => 3,
                "name" => "Romance"
            ],
            [
                "id" => 4,
                "name" => "Self-Improvement"
            ],
            [
                "id" => 5,
                "name" => "Philosophy"
            ],
            [
                "id" => 6,
                "name" => "Learning"
            ],
            [
                "id" => 7,
                "name" => "Poets"
            ],
        ]);
    }
}