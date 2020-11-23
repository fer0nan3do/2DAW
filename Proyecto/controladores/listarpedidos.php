<?php
require "../modelo.php";
$bd = new Bd();
$link = $bd->link;
$pedidios_lista = Pedido::getAll($link);
$pedidos = array();
while($pedido = $pedidios_lista->fetch_assoc()){
    array_push($pedidos, array(
        'idPedido' => $pedido["idPedido"],
        'fecha' => $pedido["fecha"],
        'dirEntrega' => $pedido["dirEntrega"],
        'nTarjeta' => $pedido["nTarjeta"],
        'fechaCaducidad' => $pedido["fechaCaducidad"],
        'dniCliente' => $pedido["dniCliente"]
    ));
}
echo json_encode($pedidos);
?>