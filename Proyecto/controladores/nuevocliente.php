<?php

require "../modelo.php";
$bd = new Bd();
$link = $bd->link;

$dni = $_GET['dniCliente'];
$nombre = $_GET['nombre'];
$direccion = $_GET['direccion'];
$email = $_GET['email'];

$nuevoCliente = new Cliente($dni, $nombre, $direccion, $email,'', '');
$nuevoCliente->insertar($link);

echo json_encode($nuevoCliente);
?>