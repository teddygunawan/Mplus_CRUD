<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'id' => '1000',
            'title' => 'IT Waits In The Dark',
            'author' => 'Christine Andersen',
            'date_published' => '2019-10-10',
            'pages' => 3000,
            'type' => 'Documentation',
            'image_format' => 'png'
        ]);
        DB::table('books')->insert([
            'id' => '1001',
            'title' => 'I\'ll Be Waiting',
            'author' => 'Devon Author',
            'date_published' => '2015-2-23',
            'pages' => 1135,
            'type' => 'Novel',
            'image_format' => 'png'
        ]);
        DB::table('books')->insert([
            'id' => '1002',
            'title' => 'The Ritual',
            'author' => 'Adam Nevill',
            'date_published' => '1990-5-5',
            'pages' => 2345,
            'type' => 'Novel',
            'image_format' => 'jpg'
        ]);
        DB::table('books')->insert([
            'id' => '1003',
            'title' => 'Isn\'t That Funny',
            'author' => 'Marco Writer',
            'date_published' => '2017-11-4',
            'pages' => 10000,
            'type' => 'Documentation',
            'image_format' => 'png'
        ]);
        DB::table('books')->insert([
            'id' => '1004',
            'title' => 'The Open Crypt',
            'author' => 'Terence Marks',
            'date_published' => '2011-11-1',
            'pages' => 1024,
            'type' => 'Novel',
            'image_format' => 'jpg'
        ]);
    }
}
