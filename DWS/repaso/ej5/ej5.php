<?php

if(isset($_GET['enviar'])){
    if($_GET['operacion'] == "suma"){
        $resultado = $_GET['num1'] + $_GET['num2'];
        echo "El resultado es ".$resultado;
    }
    if($_GET['operacion'] == "resta"){
        $resultado = $_GET['num1'] - $_GET['num2'];
        echo "El resultado es ".$resultado;
    }
    if($_GET['operacion'] == "multi"){
        $resultado = $_GET['num1'] * $_GET['num2'];
        echo "El resultado es ".$resultado;
    }
    if($_GET['operacion'] == "div"){
        $resultado = $_GET['num1'] / $_GET['num2'];
        echo "El resultado es ".$resultado;
    }
}else{
    header('Location: index.html');
}

?>