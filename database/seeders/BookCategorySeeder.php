<?php

namespace Database\Seeders;

use App\Models\book_category;
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
        $book_category = [
            [
                'book_id' => 1,
                'category_id' => 3
            ], 
            [
                'book_id' => 2,
                'category_id' => 2
            ], 
            [
                'book_id' => 3,
                'category_id' => 4
            ], 
            [
                'book_id' => 4,
                'category_id' => 1
            ], 
            [
                'book_id' => 5,
                'category_id' => 1
            ], 
        ];

        foreach($book_category AS $count){
            book_category::create([
                'book_id' => $count['book_id'],
                'category_id' => $count['category_id']             
            ]);
        } 
    }
}
