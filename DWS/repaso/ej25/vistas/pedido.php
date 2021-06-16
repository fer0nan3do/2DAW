<?php
echo "<form action='' method='post'>";
echo "ID Pedido: <input type='text' name='idPedido'><br>";
echo "Fecha: <input type='text' name='fecha'><br>";
echo "Cliente: ".lista($base->link, 'cli/','cliente','dniCliente', 'nombre')."<br>";
echo "<input type='submit' name='enviar'></form>";