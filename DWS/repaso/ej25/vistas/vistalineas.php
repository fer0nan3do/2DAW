<?php
echo "<table><tr><td>Pedido</td><td>Nlinea</td><td>producto</td><td>cantidad</td></tr>";
if (isset($_SESSION['linea'])) {
    for ($i = 0; $i < $_SESSION['linea']; $i++) {
        echo "<tr><td>".$_SESSION['idPedido']."</td><td>".$_SESSION['linea']."</td><td>".$_SESSION['producto']."</td><td>".$_SESSION['cantidad']."</td></tr>";
    }
}
echo "<form action='' method='GET'>";
echo "<tr><td>".$_SESSION['idPedido']."</td><td>$i</td><td>".lista($base->link, 'pro/', 'producto', 'idProducto', 'nombre');
echo "</td><td><input type='text' name='cantidad'></td>";
echo "<td><input type='submit' name='continuar' value='Continuar'></td></tr></form></table><br>";
echo "<a href='terminar.php'>terminar</a>";