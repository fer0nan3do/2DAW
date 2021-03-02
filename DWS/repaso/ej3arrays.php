<?php
$arriba = array(
    "País",
    "Capital",
    "Extensión",
    "Habitantes"
);
$alemania = array(
    "Alemania",
    "Berlín",
    "557046",
    "78420000"
);
$austria = array(
    "Austria",
    "Viena",
    "83849",
    "7614000"
);
$belgica = array(
    "Bélgica",
    "Bruselas",
    "30518",
    "9932000"
);
metodo1($arriba, $alemania, $austria, $belgica);
function metodo1($arriba, $alemania, $austria, $belgica)
{
    echo "<style>td{width: 100px;}</style>";
    echo "<table border='1'>";
    echo "<tr>";
    foreach ($arriba as $value) {
        echo "<th>".$value."</td>";
    }
    echo "</tr>";
    echo "<tr>";
    foreach ($alemania as $value) {
        echo "<td>".$value."</td>";
    }
    echo "</tr>";
    echo "<tr>";
    foreach ($austria as $value) {
        echo "<td>".$value."</td>";
    }
    echo "</tr>";
    echo "<tr>";
    foreach ($belgica as $value) {
        echo "<td>".$value."</td>";
    }
    echo "</tr>";
    echo "</table>";
}
