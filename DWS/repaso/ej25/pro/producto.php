<?php
require "modelo.php";
$base = new Bd();
if($_SERVER['REQUEST_METHOD'] == 'GET'){
    $dato = Producto::getAll($base->link);
    $dato->setFetchMode(PDO::FETCH_ASSOC);
    header("HTTP/1.1 200 OK");
    echo json_encode($dato->fetchAll());
    exit();
}