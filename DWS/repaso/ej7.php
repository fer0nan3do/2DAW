<?php

if (!isset($_GET['enviar'])) {
    echo "<form method='GET'>";
    echo "Nombre: <input type='text' name='nombre'><br>";
    echo "Apellidos: <input type='text' name='apellidos'><br>";
    echo "Domicilio: <input type='text' name='domicilio'><br>";
    echo "<input type='submit' name='enviar' value='Enviar'>";
} else {
    $arrayErrores = array(
        "nombre" => " ",
        "apellidos" => " ",
        "domicilio" => " ",
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
        segundoForm($arrayErrores);
    } else {
        $arrayMostrar = array(
            "nombre" => $_GET['nombre'],
            "apellidos" => $_GET['apellidos'],
            "domicilio" => $_GET['casa']
        );
        foreach ($arrayMostrar as $key => $value) {
            echo $value . ", ";
        }
    }
    function segundoForm($arrayErrores)
    {
        echo "<form method='GET'>";
        echo "Nombre: <input type='text' name='nombre'>" . $arrayErrores['nombre'] . "<br>";
        echo "Apellidos: <input type='text' name='apellidos'>" . $arrayErrores['apellidos'] . "<br>";
        echo "Domicilio: <input type='text' name='domicilio'>" . $arrayErrores['domicilio'] . "<br>";
        echo "<input type='submit' name='enviar' value='Enviar'>";
    }
}
