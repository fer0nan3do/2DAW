<?php

if (isset($_GET['enviar'])) {
    $factorial = 1;
    for ($i = 1; $i <= $_GET['factorial']; $i++) {
        $factorial = $factorial * $i;
    }
    echo "El factorial de " . $_GET['factorial'] . " es " . $factorial;
} else {
    echo "<form method='GET'>Numero para calcular factorial: <input type='number' name='factorial' required>";
    echo "<input type='submit' name='enviar' value='Enviar'></form>";
}

?>