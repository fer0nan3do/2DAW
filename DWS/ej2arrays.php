<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	$paises = array(
		"Alemania" => array(
			"Capital" => "Berlin",
			"Extension" => 557046,
			"Habitantes" => 78420000),
		"Austria" => array(
			"Capital" => "Viena",
			"Extension" => 83849,
			"Habitantes" => 7614000),
		"Belgica" => array(
			"Capital" => "Bruselas",
			"Extension" => 30518,
			"Habitantes" => 9932000));
	echo "<table border='1'";
	mostrar($paises);
	echo "</table>";
	function mostrar($paises){
	foreach ($paises as $pais) {
		echo "<tr>";
			$linea1 = "<tr>";
			$linea2 = "<tr>";
		foreach ($pais as $key => $value) {
			$linea1 = $linea1."<td>$key</td>";
			$linea2 = $linea2."<td>$value</td>";
		}
		echo "$linea1</tr>";
		echo "$linea2</tr>";
	}
}
	?>

</body>
</html>