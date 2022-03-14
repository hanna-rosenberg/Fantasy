@include('header')
@include('menu')
<!-- Här ska karaktärerna loopas men det funkar ej -->

<section class="character-section">
    <h2>You are {{$character->name}}!</h2>

    <img src="./images/characters/{{$character->img_url}}" alt="Portrait of {{$character->name}}">

    <h3>You chose {{$answer}} therefore you are {{$character->name}}!</h3>
    <p>
        Name: {{$character->name}}<br>
        Age: {{$character->age}}<br>
        Creature: {{$character->creature}}<br>
        Alignment: {{$character->alignment}}<br>
        Power: {{$character->power}}
    </p>
    <!-- <li>Colour: {{$character->colour}}</li> -->

    <h4>Summary</h4>
    <p>{{$character->summary}}</p>
</section>

@include('footer')
