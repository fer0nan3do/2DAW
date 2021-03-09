<?php

if (isset($_POST['enviar'])) {
    if (is_uploaded_file($_FILES['archivo']['tmp_name'])) {
        $dir = "img/";
        if (!is_dir($dir)) {
            mkdir($dir);
        }
        $extension = explode(".", $_FILES['archivo']['name']);
        if ($extension[1] == null) {
            echo "Error, el archivo no tiene extensión";
        } else {
            $nombre = $_FILES['archivo']['name'];
            $idUnico = uniqid();
            $nombre = $idUnico . $nombre;
            move_uploaded_file($_FILES['archivo']['tmp_name'], $dir . $nombre);
            echo "El fichero se ha subido correctamente";
        }
    } else {
        echo $_FILES['archivo']['error'];
    }
} else {
    header('Location: index.html');
}
