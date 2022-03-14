@include('header')
@include('menu')

<h2>Characters from {{ $book->title }}</h2>

<div class="characters-container">
    <ul>
        @foreach($characters as $character)
        <div class="character">
            <li>
                {{$character->name}}
                <img src="./images/characters/<?= $character->img_url ?>" alt="">
            </li>
        </div>
        @endforeach
    </ul>
</div>

@include('footer')
