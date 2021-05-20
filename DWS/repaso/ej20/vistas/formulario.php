<?php
echo "
<form action='' method='GET'>
Id Pedido: <input type='text' name='id'><br>
Fecha: <input type='text' name='fecha'><br>
cliente: <select name='cliente'><br>";
while($fila = $dato->fetch(PDO::FETCH_ASSOC)){
echo "<option>".$fila['nombre']."</option>";
}
echo "</select>
<input type='submit' name='enviar' value='Enviar'>
</form>";