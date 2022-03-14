@include('header')
@include('menu')

<h2>Characters from {{ $book->title }}</h2>

<div class="characters-container">

    @foreach($characters as $character)
    <div class="character">
        <img src="./images/characters/<?= $character->img_url ?>" alt="">
        <h3>{{$character->name}}</h3>
    </div>
    @endforeach
</div>

@include('footer')
