<?php

if (isset($_GET['enviar'])) {
    if ($_GET['num1'] > $_GET['num2'] && $_GET['num1'] > $_GET['num3']) {
        echo "El mayor es " . $_GET['num1'];
        if ($_GET['num2'] > $_GET['num3']) {
            echo " y el menor es " . $_GET['num3'];
        }
        if ($_GET['num3'] > $_GET['num2']) {
            echo " y el menor es " . $_GET['num2'];
        }
    }
    if ($_GET['num2'] > $_GET['num1'] && $_GET['num2'] > $_GET['num3']) {
        echo "El mayor es " . $_GET['num2'];
        if ($_GET['num1'] > $_GET['num3']) {
            echo " y el menor es " . $_GET['num3'];
        }
        if ($_GET['num3'] > $_GET['num1']) {
            echo " y el menor es " . $_GET['num1'];
        }
    }
    if ($_GET['num3'] > $_GET['num1'] && $_GET['num3'] > $_GET['num2']) {
        echo "El mayor es " . $_GET['num3'];
        if ($_GET['num1'] > $_GET['num2']) {
            echo " y el menor es " . $_GET['num2'];
        }
        if ($_GET['num2'] > $_GET['num1']) {
            echo " y el menor es " . $_GET['num1'];
        }
    }
} else {
    echo "<form action='ej4.php' method='GET'>
    Num 1: <input type='number' name='num1'><br>
    Num 2: <input type='number' name='num2'><br>
    Num 3: <input type='number' name='num3'><br>
    <input type='submit' name='enviar' value='Enviar'>
    </form>";
}
