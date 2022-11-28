<?php

namespace Database\Seeders;

use App\Models\categories;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = [
            ['name'=>'Romance'],
            ['name'=>'Fiction'],
            ['name'=>'Motivation'],
            ['name'=>'Education']];

            foreach($category AS $count){
                categories::create([
                    'name' => $count['name'],
                ]);
            }    
    }
}
