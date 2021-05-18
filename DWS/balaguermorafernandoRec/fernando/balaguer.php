<?php
require "modelo.php";

$base = new Bd();
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $usuario = new Usuario('', '', '', $_GET['codigo']);
    $dato = $usuario->getNombres($base->link);
    header("HTTP/1.1 200 OK");
    echo json_encode($dato->fetchAll());
}
