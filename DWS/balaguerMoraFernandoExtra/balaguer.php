<?php
session_start();
if(isset($_GET['enviar'])){
    $url = "http://localhost/balaguerMoraFernandoExtra/fernando/fernando/".$_GET['nombre'];
    $respuesta = json_decode(file_get_contents($url), true);
    if($respuesta == false){
        $dato = "El empleado no existe vuelva a intentarlo <a href='balaguer.php'>volver</a>";
        require "vistas/mensaje.php";
    }else{
        $_SESSION['nombre'] = $_GET['nombre'];
        foreach ($respuesta as $key => $value) {
            $string = "<tr><td>ID </td><td>".$value['idEmpleado']."</td></tr>";
            $string.= "<tr><td>Nombre </td><td>".$value['Nombre']."</td></tr>";
            $string.= "<tr><td>Foto </td><td>".$value['foto']."</td></tr>";
        }
        include "vistas/verDatos.php";
        $dato = "El empleado SI existe <a href='mora.php'>continuar</a>";
        require "vistas/mensaje.php";
    }
}else{
    require "vistas/formulario.php";
}