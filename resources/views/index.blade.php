<?php

use App\Models\Book;
use App\Models\Character;

// $characters = Book::find(1)->characters;

?>

<?php
// foreach ($characters as $character) {
//     echo $character['name'];}
?>
@foreach($book->characters as $character)
<li>
    <?php
    $character->name;
    ?>
</li>
@endforeach
<!-- <h1>Who are you?</h1>

<img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ffffmovieposters.com%2Fwp-content%2Fuploads%2F73931.jpg&f=1&nofb=1" alt="">

<img src="https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2F3.bp.blogspot.com%2F-0REq_eGpZ-8%2FTbKeVe2wBrI%2FAAAAAAAAA7w%2Fe4cmju2h6N4%2Fs1600%2FThe_Lord_of_the_Rings_The_Fellowship_of_the_Ring_6426d3da.jpg&f=1&nofb=1" alt=""> -->
