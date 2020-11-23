<?php

require "../modelo.php";
$bd = new Bd();
$link = $bd->link;
$dni = $_GET['dni'];
$nombre = $_GET['nombre'];
$direccion = $_GET['direccion'];
$email = $_GET['email'];

$cliente = new Cliente($dni, $nombre, $direccion, $email,'', '');

$cliente->modificar($link);

echo json_encode($cliente);
?>