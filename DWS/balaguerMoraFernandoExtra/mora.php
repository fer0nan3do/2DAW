<?php
session_start();
require "fbm.php";
$base = new Base();
if(isset($_GET['enviarid'])){
$cliente = new Cliente($_GET['id'], $_SESSION['nombre'], '', '', '', '', '');
$value = $cliente->buscar($base->link);
if($value == false){
    $dato = "Error el id no existe";
    require "vistas/mensaje.php";
}else{
    $cliente->modificar($base->link);
    $dato = "El nombre se ha modificado correctamente <a href='balaguer.php'>terminar</a>";
    require "vistas/mensaje.php";
}
}else{
    require "vistas/formulario2.php";
}