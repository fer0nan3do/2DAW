<?php
require "modelo.php";
$base = new Bd();
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $empleado = new Empleado('', $_GET['nombre'], '');
    $dato = $empleado->buscar($base->link);
    header("HTTP/1.1 200 OK");
    echo json_encode($dato);
    exit();
}else{
    header("HTTP/1.1 400 Bad Request");
}
