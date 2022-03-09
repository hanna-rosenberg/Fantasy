<style>
    img {
        height: 500px;
    }

    h1 {
        margin: auto;
    }

    .hp-button {
        width: 40%;
        height: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        background-image: url('https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ffffmovieposters.com%2Fwp-content%2Fuploads%2F73931.jpg&f=1&nofb=1');
        cursor: pointer;
        border: none;
    }

    .lotr-button {
        width: 40%;
        height: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        background-image: url('https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fimg.goldposter.com%2F2015%2F04%2FThe-Lord-of-the-Rings-The-Fellowship-of-the-Ring_poster_goldposter_com_30.jpg&f=1&nofb=1');
        cursor: pointer;
        border: none;
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
@foreach($books as $book)
{{$book->title}}
{{$book->id}}
{{$book->author}}
{{$book->year}}
<form action="">
    <button>Choose</button>
</form>
@endforeach

<form action="/hp" method="post">
    <button class="hp-button" type="submit"></button>
</form>
<form>
    <button class="lotr-button" type="submit"></button>
</form>
