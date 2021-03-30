<?php

if (!isset($_GET['enviar'])) {
    require 'vistas/formulario.php';
} else {
    $arrayErrores = array(
        "nombre" => " ",
        "apellidos" => " ",
        "domicilio" => " ",
    );
    $arrayValores = array(
        "nombre" => $_GET['nombre'],
        "apellidos" => $_GET['apellidos'],
        "domicilio" => $_GET['domicilio']
    );
    if ($_GET['nombre'] == null || $_GET['apellidos'] == null || $_GET['domicilio'] == null) {
        if ($_GET['nombre'] == null) {
            $arrayErrores['nombre'] = "<span>*El nombre esta vacio</span>";
        }
        if ($_GET['apellidos'] == null) {
            $arrayErrores['apellidos'] = "<span>*El apellido esta vacio</span>";
        }
        if ($_GET['domicilio'] == null) {
            $arrayErrores['domicilio'] = "<span>*El domicilio esta vacio</span>";
        }
        require "vistas/form2.php";
    } else {
        $arrayMostrar = array(
            "nombre" => $_GET['nombre'],
            "apellidos" => $_GET['apellidos'],
            "domicilio" => $_GET['domicilio']
        );
        foreach ($arrayMostrar as $key => $value) {
            echo $value . ", ";
        }
    }
}
