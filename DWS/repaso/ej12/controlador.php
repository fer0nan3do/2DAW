<?php
function limpiar($campo)
{
    $texto = trim($campo);
    return $texto;
}
function crear_directorio($directorio) 
{
    if (!is_dir($directorio)) {
        mkdir($directorio);
    }
}
function estado_archivo($nombre, $dir)
{
    $extension = explode(".", $nombre);
    if ($extension[1] != "PNG" && $extension[1] != "jpg" && $extension[1] != "gif") {
        echo "El archivo no es jpg, gif o png";
    } else {
        echo $nombre;
        $id = uniqid();
        $nombreid = $extension[0] . $id;
        $nombrefinal = $nombreid . "." . $extension[1];
        $nombre = $nombrefinal;
        move_uploaded_file($_FILES['archivo']['tmp_name'], "$dir/$nombre");
        echo "<a href='index.php'>Volver</a>";
    }
}
if (!isset($_POST['enviar'])) {
    require "vistas/opciones.php";
} else {
    $texto1 = limpiar($_POST['texto1']);
    $texto2 = limpiar($_POST['texto2']);
    $texto3 = limpiar($_POST['texto3']);
    
    $opciones = array(
        $texto1,
        $texto2,
        $texto3
    );
    $nombre = "directorio";
    require "lista.php";
    crear_directorio($_POST['directorio']);
    estado_archivo($_FILES['archivo']['name'], $_POST['directorio']);
    
}
