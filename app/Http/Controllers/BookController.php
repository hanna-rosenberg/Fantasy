<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function book()
    {
        $book = Book::where('id', '=', $_GET['id'])->first();
        $question = Question::where('book_id', '=', $_GET['id'])->first();
        return view('/book', ['question' => $question, 'book' => $book]);
    }
}
