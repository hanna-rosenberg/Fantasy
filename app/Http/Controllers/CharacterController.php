<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Character;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    public function character()
    {
        $answer = $_POST['answer'];
        $secret = $_POST['secret'];
        $book_id = $_GET['book_id'];

        $character = Character::where('Power', '=', $answer, 'and', 'book_id', '=', $book_id)->first();

        $book = Book::where('id', '=', $book_id)->first();
        $password = $book->password;

        if ($secret == $password) {
            return view('/character', ['character' => $character, 'answer' => $answer]);
        } else {
            echo 'Whoops! Wrong secret word!';
        }
    }
}
