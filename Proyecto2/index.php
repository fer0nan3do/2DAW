<?php
session_start();
require "pedido/modelo.php";
$base= new Bd();
if (isset($_POST['enviar'])) {
	$ped= new Pedido ($_POST['idPedido'],$_POST['fecha'],$_POST['cliente']);
	if (!$ped->existe($base->link)) {
		$_SESSION['linea']=0;
		$ped->guardar();
		header('Location:lineas.php');
	} else {
		$dato="Error: ya existe este pedido <br/>";
		require "vistas/mensaje.php";
	}
}else{
	require "funcion.php";
	require "vistas/pedido.php";
}