<?php

require "../modelo.php";

$bd = new Bd();
$link = $bd->link;
$dni = $_GET['dni'];

$cliente = new Cliente($dni,'','','','','');

$cliente->borrar($link);

echo json_encode($cliente);


?>