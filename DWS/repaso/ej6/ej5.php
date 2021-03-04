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
    echo "<form method='GET' action='ej5.php'>
    Num 1: <input type='number' name='num1'><br>
    Num 2: <input type='number' name='num2'><br>
    Tipo de operación: 
    <select name='operacion'>
        <option value='suma'>Suma</option>
        <option value='resta'>Resta</option>
        <option value='multi'>Multiplicación</option>
        <option value='div'>División</option>
    </select><br>
    <input type='submit' name='enviar' value='Enviar'>
    </form>";
}

?>