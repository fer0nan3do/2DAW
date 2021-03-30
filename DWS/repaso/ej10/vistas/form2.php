<?php

echo "<style>span{color: red;}</style>";
echo "<form method='GET'>";
echo "Nombre: <input type='text' name='nombre' value='".$arrayValores['nombre']."'>" . $arrayErrores['nombre'] . "<br>";
echo "Apellidos: <input type='text' name='apellidos' value='".$arrayValores['apellidos']."'>" . $arrayErrores['apellidos'] . "<br>";
echo "Domicilio: <input type='text' name='domicilio' value='".$arrayValores['domicilio']."'>" . $arrayErrores['domicilio'] . "<br>";
echo "<input type='submit' name='enviar' value='Enviar'>";
