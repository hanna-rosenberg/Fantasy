<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Character;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $books = Book::all();
        $characters = Character::all();

        return view('/', [
            'books' => $books,
            'characters' => $characters,
        ]);
    }
}
