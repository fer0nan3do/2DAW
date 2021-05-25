<?php
echo "<form action='' method='GET'";
echo "ID Pedido: <input type='text' name='idPedido'>";
echo "Fecha: <input type='text' name='fecha'>";
echo "Cliente: ".lista($base->link, 'cli/','cliente','dniCLiente', 'nombre')."<br>";
echo "<input type='submit' name='enviar'></form>";