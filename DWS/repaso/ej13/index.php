<?php
include "modelo.php";
if(!isset($_GET['enviar'])){
    require "vistas/formulario.php";
}else{
    $objeto = new $_GET['tipo']($_GET['peso'],$_GET['precio'],$_GET['stock'],$_GET['pulgacap']);
    echo $objeto->pulgadas;
}