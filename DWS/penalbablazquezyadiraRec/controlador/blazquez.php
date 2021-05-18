<?php
require "../ypb.php";
$bd = new Bd();
$cod_pob =$_COOKIE['cod_pob'];


$jugador = new Jugador ($_GET["jugadorSelect"]);
$jugador->insertar($bd->link);
setcookie('cod_pob', "",-360000);
require "../vistas/mensajeFinal.php";






