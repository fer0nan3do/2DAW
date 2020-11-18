<?php
echo "bienvenido " . $_SESSION['nombre'] . "<br>";
echo "<style>tr:first-child > td{background-color: #1B7CCC;color: white;}td{background-color: #C7CDD2;}a{text-decoration: none; color: #1453A2; border: 1px solid black; border-radius: 5px; padding: 2px; margin-right: 5px;}</style><table><tr><td>Id</td><td>Nombre</td><td>Precio</td><td>Cantidad</td><td>Importe</td></tr>";
echo "<tr>";
if (isset($_SESSION['carrito'])) {
    $carrito = $_SESSION['carrito'];
    foreach ($carrito as $producto) {
        echo "<td>" . $producto['idProducto'] . "</td><td>" . $producto['nombre'] . "</td><td>" . $producto['precio'] . "</td><td>" . $producto['cantidad'] . "</td>";
    }
}
echo "</tr>";
echo "</table>";
echo "<a href='confirmar.php'>Procesar Pedido</a><a href='principal.php'>Seguir Comprando</a>";
