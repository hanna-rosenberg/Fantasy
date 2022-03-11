@include('header')

<section class="book-section">
    <h1>You have chosen {{$book->title}}!</h1>

    <img src="./images/books/{{$book->img_url}}" alt="">
    <h2>Question 1: {{$question->question}}</h2>
    <ul>
        <form action="">
            @csrf
            <input type="radio" id="huey" name="drone" value="huey" checked>
            <label for="huey">{{$question->a}}</label>
            <input type="radio" id="huey" name="drone" value="huey">
            <label for="huey">{{$question->b}}</label>
            <input type="radio" id="huey" name="drone" value="huey">
            <label for="huey">{{$question->c}}</label>
            <input type="radio" id="huey" name="drone" value="huey">
            <label for="huey">{{$question->d}}</label>
            <br>

            <button type="submit">Kolla vem du är!</button>
        </form>
    </ul>
</section>

@include('footer')
