<?php

require "modelo.php";

$bd = new BD();


if ($_SERVER['REQUEST_METHOD'] == 'GET') {

 
        $usuario = new Usuario($_GET['cod_pob']);
        $value = $usuario->buscar($bd->link);
        header("HTTP/1.1 200 OK");
        echo json_encode($value);
        exit();
    
       
    
         
}
else {
    header("HTTP/1.1 400 Bad Request");
}  
       

