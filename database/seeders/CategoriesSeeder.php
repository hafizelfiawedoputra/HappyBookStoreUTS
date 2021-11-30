<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categories;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categori = [
            [
                'category' => 'Fiction',
            ],
            [
                'category' => 'Science',
            ],
            [
                'category' => 'Computer',
            ],
            [
                'category' => 'Food',
            ],
            [
                'category' => 'Biography',
            ],
            [
                'category' => 'Novel',
            ],
            [
                'category' => 'Comic',
            ],
            [
                'category' => 'Scientific Work',
            ],
            [
                'category' => 'Dictionary',
            ],
            [
                'category' => 'Magazine',
            ]
        ];
        foreach ($categori as $key => $value){
            Categories::create($value);
        }
    }
}
