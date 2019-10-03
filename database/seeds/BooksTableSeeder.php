<?php

use Illuminate\Database\Seeder;
use AdvancedELOQUENT\Book;


class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Book::class, 20)->create();
    }
}
