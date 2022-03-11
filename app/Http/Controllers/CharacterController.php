<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
     public function character()

        $character = Character::->first();

        return view('/characters', 'character' => $character);

}
}
