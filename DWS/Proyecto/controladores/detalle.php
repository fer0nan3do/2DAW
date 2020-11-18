<?php
session_start();
require "../modelo.php";
if (isset($_SESSION['nombre'])) {
    $link = new Bd();
    $idProducto = $_GET['idProducto'];
    $producto = new Producto($idProducto, '', '', '', '', '', '', '', '', '');
    $info = $producto->buscar($link->link);
    require "../vistas/vistaDetalle.php";
} else {
    require header('Location: ../vistas/validacion.php');
}
