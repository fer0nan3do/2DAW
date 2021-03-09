<?php

$texto = limpiar($_POST['texto1']);
echo ":".$texto.":";
function limpiar($campo){
    $texto = trim($campo);
    return $texto;
}

?>