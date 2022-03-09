<style>
    img {
        height: 500px;
    }

    button {
        cursor: pointer;
        border: none;
        background-color: none;
    }

    h1 {
        margin: auto;
    }

    .book-container {
        display: flex;
    }
</style>
<?php

use App\Models\Book;
use App\Models\Character;
use Illuminate\Support\Facades\DB;

?>

<?php

$books = DB::select('select * from books');
$characters = DB::select('select * from characters');

// foreach ($characters as $character) {
//     echo $character['name'];}
?>

<h1>Who are you?</h1>
<div class="book-container">
    @foreach($books as $book)
    <div class="book">
        {{$book->title}}
        <form action="/book?id=<?= $book->id ?>" method="post">
            @csrf
            <button> <img src="./images/books/<?= $book->img_url ?>" alt="Poster of the feature film <?= $book->title ?>"></button>
        </form>
    </div>
    @endforeach
</div>
<!-- <div class="characters-container">
    @foreach($characters as $character)
    <div class="character">
        <li>
            {{$character->name}}
            <img src="./images/characters/<?= $character->img_url ?>" alt="">
        </li>
    </div>
    @endforeach
</div> -->
