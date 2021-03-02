<?php

$array = array(
    "País" => array(
        "Capital",
        "Extensión",
        "Habitantes"
    ),
    "Alemania" => array(
        "Berlín",
        "557046",
        "78420000"
    ),
    "Austria" => array(
        "Viena",
        "83849",
        "7614000"
    ),
    "Bélgica" => array(
        "Bruselas",
        "30518",
        "9932000"
    )
);
echo "<table border='1'><style>td{width: 100px;}</style>";
foreach ($array as $key => $value) {
    if ($key == "País") {
        echo "<tr><th>" . $key . "</th>";
    } else {
        echo "<tr><td>" . $key . "</td>";
    }
    foreach ($value as $valor) {
        if ($valor == "Capital" || $valor == "Extensión" || $valor == "Habitantes") {
            echo "<th>" . $valor . "</th>";
        } else {
            echo "<td>" . $valor . "</td>";
        }
    }
    echo "</tr>";
}
echo "</table>";
