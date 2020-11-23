<?php
session_start();
require "../modelo.php";
$link = new Bd;
if (isset($_POST['enviarPass'])) {
	$cli = new Cliente($_POST['dni'], '', '', '', $_POST['pass'], '');
	if ($nom = $cli->autenticar($link->link)) {
		if ($nom['administrador'] == 1) {
			header('Location: ../vistas/clientes.html');
		} else {
			header('Location: ../controladores/principal.php');
		}
		$_SESSION['nombre'] = $nom['nombre'];
		$dni = $cli->buscar($link->link);
		$_SESSION['dniCliente'] = $dni['dniCliente'];
		$_SESSION['total'] = 0;
	} else {
		$dato = "el usuario o la contraseña es incorrecta<br>";
		$dato .= "<a href='../vistas/login.php'> Volver </a>";
		require "../vistas/mensaje.php";
	}
} else {
	require('../vistas/validacion.php');
}
