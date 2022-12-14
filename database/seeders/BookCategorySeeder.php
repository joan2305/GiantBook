<?php

namespace Database\Seeders;

use App\Models\Bookcategory;
use Illuminate\Database\Seeder;

class BookCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bookcategory::query()->insert([
            [
                "id" => 1,
                "book_id" => 1,
                "category_id" => 1
            ],
            [
                "id" => 2,
                "book_id" => 1,
                "category_id" => 2
            ],
            [
                "id" => 3,
                "book_id" => 2,
                "category_id" => 1
            ],
            [
                "id" => 4,
                "book_id" => 2,
                "category_id" => 2
            ],
            [
                "id" => 5,
                "book_id" => 3,
                "category_id" => 2
            ],
            [
                "id" => 6,
                "book_id" => 3,
                "category_id" => 3
            ],
            [
                "id" => 7,
                "book_id" => 4,
                "category_id" => 4
            ],
            [
                "id" => 8,
                "book_id" => 4,
                "category_id" => 5
            ],
            [
                "id" => 9,
                "book_id" => 5,
                "category_id" => 4
            ],
            [
                "id" => 10,
                "book_id" => 6,
                "category_id" => 4
            ],
            [
                "id" => 11,
                "book_id" => 6,
                "category_id" => 6
            ],
            [
                "id" => 12,
                "book_id" => 7,
                "category_id" => 4
            ],
            [
                "id" => 13,
                "book_id" => 8,
                "category_id" => 2
            ],
            [
                "id" => 14,
                "book_id" => 8,
                "category_id" => 3
            ],
            [
                "id" => 15,
                "book_id" => 9,
                "category_id" => 7
            ],
        ]);
    }
}