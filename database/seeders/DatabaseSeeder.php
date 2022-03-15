<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $books = [
            new Book([
                'author' => 'J.K Rowling',
                'title' => 'Harry Potter and the Philosopher\'s Stone',
                'year' => 1997,
                'img_url' => 'harry-potter.jpeg',
                'password' => 'alohomora',
                'hint' => 'Unlocking spell',
                'hint_url' => 'https://pottermore.fandom.com/wiki/Unlocking_Spell'
            ]),

            new Book([
                'author' => 'J.R.R Tolkien',
                'title' => 'The Lord of the Rings: The Fellowship of the Ring',
                'year' => 1954,
                'img_url' => 'lord-of-the-rings.jpeg',
                'password' => 'mellon',
                'hint' => 'Speak friend, and enter',
                'hint_url' => 'https://lotr.fandom.com/wiki/Doors_of_Durin'
            ]),
        ];
        foreach ($books as $book) {
            $book->save();
        }
    }
}
