<?php

$texto1 = limpiar($_POST['texto1']);
$texto2 = limpiar($_POST['texto2']);
$texto3 = limpiar($_POST['texto3']);
function limpiar($campo){
    $texto = trim($campo);
    return $texto;
}
$opciones = array(
    $texto1,
    $texto2,
    $texto3
);
$nombre = "directorio";
lista($nombre, $opciones);
function lista($nombre, $opciones){
    echo "<form method='POST' action='subir.php' enctype='multipart/form-data'>
    <select name='".$nombre."'>
        <option>".$opciones[0]."</opction>
        <option>".$opciones[1]."</opction>
        <option>".$opciones[2]."</opction>
    </select>
    Subir archivo: 
    <input type='file' name='archivo'><br>
    <input type='submit' name='enviar' value='Enviar'>
    </form>";
}
?>