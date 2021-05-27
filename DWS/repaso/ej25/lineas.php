<?php
session_start();
require "modelo.php";
$base = new Base();
if(isset($_GET['continuar'])){
    $_SESSION['linea']++;
    $lin = new Linea($_SESSION['idPedido'], $_SESSION['linea'], $_SESSION['producto'], $_SESSION['cantidad']);
    $lin->guardar();
}
require "funcion.php";
require "vistas/vistalineas.php";