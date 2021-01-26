<?php
if (isset($_POST['enviar'])) {
    $url = "https://pokeapi.co/api/v2/pokemon/" . urlencode($_POST['nombre']);
    $pokemon = json_decode(file_get_contents($url), true);
    if ($pokemon['abilities'] == null) {
        echo "No existe";
    } else {
        echo "Habilidades:<br><br>";
        foreach ($pokemon['abilities'] as $habilidades) {
            echo "Habilidad: ";
            foreach ($habilidades['ability'] as $key) {
                echo "$key<br>";
            }
            if ($habilidades['is_hidden'] == true) {
                $oculta = "Sí";
            } else {
                $oculta = "No";
            }
            echo "Oculta: " . $oculta . "<br>";
            echo "<br>";
        }
        echo "<hr>";
        echo "Tipos:<br><br>";
        //echo "Titulo:".$nasa['title']." <br>";
        foreach ($pokemon['types'] as $tipos) {
            echo "Tipo " . $tipos['slot'] . ": ";
            foreach ($tipos['type'] as $key) {
                echo $key . "<br>";
            }
        }
    }
}
