<?php

if (!isset($_GET['enviar'])) {
    echo "Ordenar números";
    echo "<form method='GET'>";
    echo "Num 1: <input type='number' name='num1'>";
    echo "Num 2: <input type='number' name='num2'>";
    echo "Num 3: <input type='number' name='num3'>";
    echo "<input type='submit' name='enviar' value='Enviar'></form>";
} else {
    if ($_GET['num1'] > $_GET['num2']) {
        if ($_GET['num1'] > $_GET['num3']) {
            if ($_GET['num2'] > $_GET['num3']) {
                echo $_GET['num1'] . " > " . $_GET['num2'] . " > " . $_GET['num3'];
            }
            if($_GET['num3'] > $_GET['num2']){
                echo $_GET['num1'] . " > " . $_GET['num3'] . " > " . $_GET['num2'];
            }
        }
    }
    if($_GET['num2'] > $_GET['num1']){
        if($_GET['num2'] > $_GET['num3']){
            if($_GET['num1'] > $_GET['num3']){
                echo $_GET['num2'] . " > " . $_GET['num1'] . " > " . $_GET['num3'];
            }
            if($_GET['num3'] > $_GET['num1']){
                echo $_GET['num2'] . " > " . $_GET['num3'] . " > " . $_GET['num1'];
            }
        }
    }
    if($_GET['num3'] > $_GET['num1']){
        if($_GET['num3'] > $_GET['num2']){
            if($_GET['num1'] > $_GET['num2']){
                echo $_GET['num3'] . " > " . $_GET['num1'] . " > " . $_GET['num2'];
            }
            if($_GET['num2'] > $_GET['num1']){
                echo $_GET['num3'] . " > " . $_GET['num2'] . " > " . $_GET['num1'];
            }
        }
    }
}
