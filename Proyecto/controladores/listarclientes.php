<?php

require "../modelo.php";
$bd = new Bd();
$link = $bd->link;
$usuarios = Cliente::getAll($link);

$clientes = array();

while($cliente = $usuarios->fetch_assoc()){
    array_push($clientes, array(
        'dniCliente' => $cliente["dniCliente"],
        'nombre' => $cliente["nombre"],
        'direccion' => $cliente["direccion"],
        'email' => $cliente["email"]
    ));
}
echo json_encode($clientes);

?>