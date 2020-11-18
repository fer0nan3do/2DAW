<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	$num1 = $_REQUEST["uno"];
	$num2 = $_REQUEST["dos"];
	$operacion = $_POST["operacion"];
	if($operacion == "suma"){
		suma($num1, $num2);
	}else if($operacion == "resta"){
		resta($num1, $num2);
	}else if($operacion == "multiplicacion"){
		multi($num1, $num2);
	}else if($operacion == "division"){
		divi($num1, $num2);
	}
	function suma($num1, $num2){
		$resultado = $num1 + $num2;
		echo "$resultado";
	}
	function resta($num1, $num2){
		$resultado = $num1 - $num2;
		echo "$resultado";
	}
	function multi($num1, $num2){
		$resultado = $num1 * $num2;
		echo "$resultado";
	}
	function divi($num1, $num2){
		$resultado = $num1 / $num2;
		echo "$resultado";
	}
	?>

</body>
</html>