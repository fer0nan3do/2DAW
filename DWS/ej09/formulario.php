<?php
$carpeta = $_POST{"directorio"};
$texto = limpiar($carpeta);
$array = array($_POST{'Carpeta1'}, $_POST{'Carpeta2'}, $_POST{'Carpeta3'});

function limpiar($campo){
		htmlspecialchars($campo);
	return $campo;
}
?>