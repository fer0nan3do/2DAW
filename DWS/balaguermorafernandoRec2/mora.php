<?php
require "fbm.php";
echo "La poblacion es: ".$_COOKIE['codigo'];
$base = new Bd();
$jugador = new Jugador($_GET['jugador']);
$jugador->insertar($base->link);
echo "<br>El juador ".$_GET['jugador']." se ha instertado correctamente";
setcookie("codigo", "", time()-1);
echo "<br><a href='./balaguer.php'>Continuar</a>";