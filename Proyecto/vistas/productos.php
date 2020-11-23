<?php
echo "bienvenido ".$_SESSION['nombre']."<br><br>";
echo "<div style='float: right; text-align: center;'><a href='vercarrito.php'><img src='../vistas/img/carrito.jpg' width='50px'></a><br>".$_SESSION['total']."</div>";
while($fila = $productos->fetch_assoc()){
    echo "<div style='display: inline-block; margin: 50px; text-align: center;'><img src='../vistas/img/".$fila['foto']."' width='200vh'><br>".$fila['nombre']."<br>".$fila['precio']."<br><a href='detalle.php?idProducto=".$fila['idProducto']."' style='text-decoration: none; color: #1453A2; border: 1px solid black; border-radius: 5px; padding: 2px;'>Detalle</a></div>";
}
?>