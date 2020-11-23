<?php
echo "bienvenido ".$_SESSION['nombre']."<br><br>";
echo "<div style='display: inline-block; width: 700px;'><img src='../vistas/img/".$info['foto']."' width='500px'></div><div style='display: inline-block'>".$info['idProducto']."<br><strong>".$info['nombre']."</strong><br>".$info['origen']."<br>".$info['marca']."<br>".$info['categoria']."<br>".$info['peso']."<br>".$info['precio']."<br><form action='vercarrito.php' method='GET'><input type='number' name='cantidad' value='1' min='1' max='100'><br>
<input type='hidden' name='idProducto' value='".$info['idProducto']."' />
<input type='hidden' name='precio' value='".$info['precio']."' />
<input type='hidden' name='nombre' value='".$info['nombre']."' />
<input type='submit' name='comprar' value='Comprar'>
</form></div>";
?>