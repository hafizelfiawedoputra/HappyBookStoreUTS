<?php

namespace Database\Seeders;

use App\Models\Books;
use Illuminate\Database\Seeder;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $book = [
            [
                'category_id' => '1',
                'title' => 'Brave New World',
            ],
            [
                'category_id' => '1',
                'title' => 'The Great Gatsby',
            ],
            [
                'category_id' => '2',
                'title' => 'Cosmos',
            ],
            [
                'category_id' => '2',
                'title' => 'A Short History of Nearly Everything',
            ],
            [
                'category_id' => '3',
                'title' => 'System Design Interview - an Insider s Guide',
            ],
            [
                'category_id' => '3',
                'title' => 'A Programmer s Guide to Computer Science: A Virtual Degree for the Self-taught Developer',
            ],
            [
                'category_id' => '4',
                'title' => 'Modern Comfort Food: A Barefoot Contessa Cookbook',
            ],
            [
                'category_id' => '5',
                'title' => 'Steve Jobs',
            ],
            [
                'category_id' => '6',
                'title' => 'Wuthering Heights',
            ],
            [
                'category_id' => '7',
                'title' => 'Comic Doraemon',
            ],
            [
                'category_id' => '8',
                'title' => 'Python Data Science Handbook',
            ],
            [
                'category_id' => '9',
                'title' => 'Pocket Oxford English Dictionary',
            ],
        ];
        foreach ($book as $key => $value){
            Books::create($value);
        }
    }
}
