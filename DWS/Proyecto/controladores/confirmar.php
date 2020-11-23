<?php
session_start();
require "../modelo.php";
$dni = $_SESSION['dni'];
if(isset($_SESSION['nombre'])){
    require "../vistas/vistaconfirmar.php";
}else{
    require header('Location ../vistas/validacion.php');
}