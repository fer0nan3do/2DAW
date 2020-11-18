<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	inicializar 3 variables y mostrar de menor a mayor<br>
	<?php
	$num1 = 5;
	$num2 = 7;
	$num3 = 3;
	if ($num1 < $num2 && $num3 > $num1) {
		if ($num2 < $num3) {
			echo "$num1 < $num2 < $num3";
		}
		if ($num3 < $num2) {
			echo "$num1 < $num3 < $num2";
		}
	}
	if ($num2 < $num1 && $num3 > $num2) {
		if ($num1 < $num3) {
			echo "$num2 < $num1 < $num3";
		}
		if ($num3 < $num1) {
			echo "$num2 < $num3 < $num1";
		}
	}
	if ($num3 < $num1 && $num2 > $num3) {
		if ($num1 < $num2) {
			echo "$num3 < $num1 < $num2";
		}
		if ($num2 < $num1) {
			echo "$num3 < $num2 < $num1";
		}
	}
	?>

</body>
</html>