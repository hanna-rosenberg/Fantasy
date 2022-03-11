@include('header')

<section class="book-section">
    <h1>You have chosen {{$book->title}}!</h1>

    <img src="./images/books/{{$book->img_url}}" alt="">
    <h2>Question 1: {{$question->question}}</h2>
    <ul>
        <li>{{$question->a}}</li>
        <li>{{$question->b}}</li>
        <li>{{$question->c}}</li>
        <li>{{$question->d}}</li>
    </ul>

    <!-- <form action="/quiz">
        @csrf

        <button type="submit">Take the Quiz!</button>
    </form> -->
</section>

@include('footer')
