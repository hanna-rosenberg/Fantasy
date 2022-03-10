<h1>You have chosen {{$book->title}}!</h1>

<img src="./images/books/{{$book->img_url}}" alt="">

<form action="/quiz">
    @csrf

    <button type="submit">Take the Quiz!</button>
</form>
