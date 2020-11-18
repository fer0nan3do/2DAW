<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	$cabeza = array('Pais', 'Capital', 'Extension', 'Habitantes');
	$alem = array('Alemania', 'Berlin', 557046, 78420000 );
	$aus = array('Austria', 'Viena', 83849, 7614000 );
	$bel = array('Belgica', 'Bruselas', 30518, 9932000 );
	echo "<table border='1'>";
	mostrar($cabeza);
	mostrar($alem);
	mostrar($aus);
	mostrar($bel);
	echo "</table>";

	function mostrar($paises){
		echo "<tr>";
		foreach ($paises as $value) {
			echo <<<cosa
			<td>$value</td>
			cosa;
		}
		echo "</tr>";
	}
	?>

</body>
</html>