<?php
$peli =json_decode(file_get_contents("https://ghibliapi.herokuapp.com/films/"), true);
$people =json_decode(file_get_contents("https://ghibliapi.herokuapp.com/people/"), true);
$species =json_decode(file_get_contents("https://ghibliapi.herokuapp.com/species/"), true);
$locations =json_decode(file_get_contents("https://ghibliapi.herokuapp.com/locations/"), true);
$vehicles =json_decode(file_get_contents("https://ghibliapi.herokuapp.com/vehicles/"), true);
foreach ($peli as $pelis) {
			
    foreach ($pelis as $key => $valor) {
        echo "$key: $valor<br>";
    }
    echo "<hr>"; 
}

?>