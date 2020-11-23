<?php
session_start();
require "../modelo.php";
if (isset($_SESSION['nombre'])) {
    if (isset($_GET['comprar'])) {
        if ($_SESSION['total'] == 0) {
            $_SESSION['idProducto'] = array();
            $_SESSION['nombreProducto'] = array();
            $_SESSION['precio'] = array();
            $_SESSION['cantidad'] = array();
        }
        $_SESSION['idProducto'][$_SESSION['total']] = $_GET['idProducto'];
        $_SESSION['nombreProducto'][$_SESSION['total']] = $_GET['nombre'];
        $_SESSION['precio'][$_SESSION['total']] = $_GET['precio'];
        $_SESSION['cantidad'][$_SESSION['total']] = $_GET['cantidad'];
        $_SESSION['total']++;
    }
    require "../vistas/vistavercarrito.php";
} else {
    require header("Location: ../vistas/validacion.php");
}
