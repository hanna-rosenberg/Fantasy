@include('header')
<!-- Här ska karaktärerna loopas men det funkar ej -->


<h2>You chose {{$answer}}!</h2>

<h2>You are {{$character->name}}!</h2>
<ul>
    <li>Name: {{$character->name}}</li>
    <li>Age: {{$character->age}}</li>
    <li>Creature: {{$character->creature}}</li>
    <li>Alignment: {{$character->alignment}}</li>
    <li>Power: {{$character->power}}</li>
    <li>Colour: {{$character->colour}}</li>
</ul>
<h3>Summary</h3>
<p>{{$character->summary}}</p>

@include('footer')
