<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Character;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function gallery()
    {
        $books = Book::all();
        $characters = Character::all();

        return view('/gallery', [
            'books' => $books,
            'characters' => $characters,
        ]);
    }
}
