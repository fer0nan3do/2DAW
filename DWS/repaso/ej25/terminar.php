<?php
session_start();
require "modelo.php";
$base = new Base();
$pedido = new Pedido($_SESSION['idPedido'], $_SESSION['fecha'], $_SESSION['dniCliente']);
$pedido->Insertar($base->link);
$dato = Linea::InsertarTodas($base->link);
$dato.="<br><a href='index.php'>Volver</a>";
require "vistas/mensaje.php";