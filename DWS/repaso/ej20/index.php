<?php
session_start();
$_SESSION['linea'] = 0;
require "modelo.php";
$base = new Bd();
$dato = Cliente::getAll($base->link);
if (isset($_GET['enviar'])) {
    $_SESSION['id'] = $_GET['id'];
    $_SESSION['fecha'] = $_GET['fecha'];
    $_SESSON['cliente'] = $_GET['cliente'];
    $_SESSON['linea']++;
    header('Location: lineas.php');
} else {
    require "vistas/formulario.php";
}
