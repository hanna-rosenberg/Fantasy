<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Character;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $books = Book::select('select * from books');
        $characters = Character::select('select * from characters');

        return view('/', [
            'book' => $books,
            'character' => $characters,
        ]);
    }
}
