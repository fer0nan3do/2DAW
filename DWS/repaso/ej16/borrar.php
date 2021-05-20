<?php
include "vistas/inicio.html";

require "modelo.php";
$link = new Bd;
$cli = new Cliente($_GET['dni'], '', '', '', '','');
$dato = $cli->borrar($link->link);
$dato = "El cliente se ha borrado correctamente<br>";
$dato .= "<a href='index.php'>Volver</a>";
$link->link->close();
require "vistas/mensaje.php";

include "vistas/fin.html";
