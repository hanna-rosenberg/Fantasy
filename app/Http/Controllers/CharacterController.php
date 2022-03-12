<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    public function character()
    {
        $answer = $_POST['answer'];
        $password = $_POST['password'];
        $book_id = $_GET['book_id'];

        $character = Character::where('Power', '=', $answer, 'and', 'book_id', '=', $book_id)->first();

        return view('/character', ['character' => $character, 'answer' => $answer]);
    }
}
