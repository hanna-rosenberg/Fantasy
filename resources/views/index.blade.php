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
            <button> <img src="./images/books/<?= $book->img_url ?>" alt=""></button>
        </form>
    </div>
    @endforeach
</div>
