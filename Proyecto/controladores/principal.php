<?php
session_start();
require "../modelo.php";
if (isset($_SESSION['nombre'])) {
    $base = new Bd();
    $productos = Producto::getAllProducto($base->link);
    include "../vistas/productos.php";
} else require "validar.php";
