<?php
echo "bienvenido " . $_SESSION['nombre'] . "<br>";
echo "<style>tr:first-child > td{background-color: #1B7CCC;color: white;}td{background-color: #C7CDD2;}a{text-decoration: none; color: #1453A2; border: 1px solid black; border-radius: 5px; padding: 2px; margin-right: 5px;}</style><table><tr><td>Id</td><td>Nombre</td><td>Precio</td><td>Cantidad</td><td>Importe</td></tr>";
$total = 0;
for ($i = 0; $i < $_SESSION['total']; $i++) {
    echo "<tr><td>" . $_SESSION['idProducto'][$i] . "</td><td>" . $_SESSION['nombreProducto'][$i] . "</td><td>" . $_SESSION['precio'][$i] . "</td><td>" . $_SESSION['cantidad'][$i] . "</td>
    <td>" . $importe = $_SESSION['precio'][$i] * $_SESSION['cantidad'][$i] . "</td></tr>";
    $total += $_SESSION['precio'][$i] * $_SESSION['cantidad'][$i];
}
echo "<tr><td></td><td></td><td></td><td>TOTAL</td><td>" . $total;

echo "</table>";
echo "<a href='confirmar.php'>Procesar Pedido</a><a href='principal.php'>Seguir Comprando</a>";
