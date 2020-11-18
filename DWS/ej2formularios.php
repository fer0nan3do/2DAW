<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
$error=False;
$errores = array('nombre' => '', 'apellidos' => '', 'domicilio' => '');
$valores = array('nombre' => '', 'apellidos' => '', 'domicilio' => '');
if (isset($_GET['enviar'])) {
	if (empty($_GET['nombre'])){
		$errores['nombre'] = "No se puede dejar vacio el nombre";
		$error=True;
	}else{
		$valores['nombre'] = $_GET['nombre'];
	}
	if (empty($_GET['apellidos'])){
		$errores['apellidos'] = "No se puede dejar vacio los apellidos";
		$error=True;
	}else{
		$valores['apellidos'] = $_GET['apellidos'];
	}
	if (empty($_GET['domicilio'])){
		$errores['domicilio'] = "No se puede dejar vacio el domicilio";
		$error=True;
	}else{
		$valores['domicilio'] = $_GET['domicilio'];
	}
	
	if(!$error){
		foreach ($_GET as $key => $value) {
			$vector[$key]=$value;
			echo "$key : ".$vector[$key]."<br>";}
		}
	}
	
if (!isset($_GET['enviar']) || $error){	
	echo "<form action='' >";
	echo "Nombre: <input type='text' name='nombre' value='".$valores['nombre']."'>".$errores['nombre']."<br>";
	echo "apellidos: <input type='text' name='apellidos' value='".$valores['apellidos']."'>".$errores['apellidos']."<br>";
	echo "domicilio: <input type='text' name='domicilio' value='".$valores['domicilio']."'>".$errores['domicilio']."<br>";
	echo "<input type='submit' name='enviar'><br>";
	echo "</form>";	}	?>

</body>
</html>