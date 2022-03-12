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
        $question_two = Question::where('book_id', '=', $_GET['id'])->skip(1)->first();
        $question_three = Question::where('book_id', '=', $_GET['id'])->skip(2)->first();
        return view('/book', [
            'book' => $book,
            'question' => $question,
            'question_two' => $question_two,
            'question_three' => $question_three
        ]);
    }
}
