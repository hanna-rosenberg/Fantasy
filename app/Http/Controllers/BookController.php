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
        $book_id = $_GET['id'];
        $book = Book::where('id', '=', $book_id)->first();
        $question = Question::where('book_id', '=', $book_id)->first();
        $question_two = Question::where('book_id', '=', $book_id)->skip(1)->first();
        $question_three = Question::where('book_id', '=', $book_id)->skip(2)->first();

        return view('/book', [
            'book' => $book,
            'question' => $question,
            'question_two' => $question_two,
            'question_three' => $question_three
        ]);
    }
}
