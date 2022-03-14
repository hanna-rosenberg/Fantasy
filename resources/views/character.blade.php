@include('header')
@include('menu')
<!-- Här ska karaktärerna loopas men det funkar ej -->

<section class="character-section">
    <h2>You chose {{$answer}}!</h2>

    <img src="./images/characters/{{$character->img_url}}" alt="Portrait of {{$character->name}}">

    <h3>You are {{$character->name}}!</h3>
    <ul>
        <li>Name: {{$character->name}}</li>
        <li>Age: {{$character->age}}</li>
        <li>Creature: {{$character->creature}}</li>
        <li>Alignment: {{$character->alignment}}</li>
        <li>Power: {{$character->power}}</li>
        <li>Colour: {{$character->colour}}</li>
    </ul>
    <h4>Summary</h4>
    <p>{{$character->summary}}</p>
</section>

@include('footer')
