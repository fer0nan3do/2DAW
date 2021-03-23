<?php

crear_directorio($_POST['directorio']);
estado_archivo($_FILES['archivo']['name'], $_POST['directorio']);
function crear_directorio($directorio){
    if(!is_dir($directorio)){
        mkdir($directorio);
    }
}
function estado_archivo($nombre, $dir){
    $extension = explode(".", $nombre);
    if($extension[1] != "PNG" && $extension[1] != "jpg" && $extension[1] != "gif"){
        echo "El archivo no es jpg, gif o png";
    }else{
        echo $nombre;
        $id = uniqid();
        $nombreid = $extension[0].$id;
        $nombrefinal = $nombreid.".".$extension[1];
        $nombre = $nombrefinal;
        move_uploaded_file($_FILES['archivo']['tmp_name'], "$dir/$nombre");
        echo "<a href='opciones.html'>Volver</a>";
    }
}