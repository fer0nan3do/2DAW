<?php
session_start();
require "../modelo.php";
if (isset($_SESSION['nombre'])) {
    $idProducto = $_GET['idProducto'];
    $nombre = $_GET['nombre'];
    $precio = $_GET['precio'];
    $cantidad = $_GET['cantidad'];
    $producto = array(
        "idProducto"=>$idProducto,
        "nombre"=>$nombre,
        "precio"=>$precio,
        "cantidad"=>$cantidad
    );
    require "../vistas/vistavercarrito.php";
} else {
    require header("Location: ../vistas/validacion.php");
}
