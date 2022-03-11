<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/', 'index')->middleware('guest');

Route::post('/book', [BookController::class, 'book', 'question'])->name('book');


// Route::get('/book', [BookController::class, 'question'])->name('book');

// Route::post('/book', [BookController::class, 'book', 'question'])->name('book');

// Route::post('getbook', GetBooksController::class);

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/', GetBooksController::class);
