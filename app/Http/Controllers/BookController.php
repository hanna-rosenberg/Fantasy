<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function book()
    {
        $book = Book::where('id', '=', $_GET['id'])->first();
        return view('/book', ['book' => $book]);
    }

    // public function show($id)
    // {
    //     return view('/book', ['book' => Book::findOrFail($id)]);
    // }
}
