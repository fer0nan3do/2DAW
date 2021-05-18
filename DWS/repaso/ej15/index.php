<?php
require "modelo.php";
$base = new Bd();
$dato = Cliente::getAll($base->link);
require "vistas/tabla.php";