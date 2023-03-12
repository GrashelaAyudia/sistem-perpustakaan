<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::create([
            'title' => 'The Lord of the Rings',
            'author' => 'J. R. R. Tolkien',
            'publisher' => 'Allen & Unwin',
            'year' => '1954',
            'isbn' => '978-0-04-823993-3',
            'cover' => 'https://images-na.ssl-images-amazon.com/images/I/51Z9ZQZQFJL._SX331_BO1,204,203,200_.jpg',
            'description' => 'The Lord of the Rings is an epic high fantasy novel written by English author and scholar J. R. R. Tolkien. The story began as a sequel to Tolkien\'s 1937 fantasy novel The Hobbit, but eventually developed into a much larger work. Written in stages between 1937 and 1949, The Lord of the Rings is one of the best-selling novels ever written, with over 150 million copies sold.',
            'category' => 'Fantasy',
        ]);
    }
}
