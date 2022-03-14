@include('header')
@include('menu')

<p>First choose your book:</p>
<div class="book-container">
    @foreach($books as $book)
    <div class="book">
        {{$book->title}}

        <form action="charactergallery?book_id={{ $book->id }}" method="post">

            @csrf
            <button> <img src="./images/books/<?= $book->img_url ?>" alt="Poster of the feature film <?= $book->title ?>"></button>
        </form>
    </div>
    @endforeach

    @include('footer')
