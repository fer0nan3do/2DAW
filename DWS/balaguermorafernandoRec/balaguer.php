<?php
if (isset($_GET['enviar'])) {
    setcookie("codigo", $_GET['codigo']);
    require "fbm.php";

    $url = "http://localhost/balaguermorafernandoRec/fernando/balaguer.php/" . $_GET['codigo'];
    $usuario = json_decode(file_get_contents($url), true);
    echo "<form method='GET' action='mora.php'>Jugador: <select name='jugador'>";
    foreach ($usuario['Nombre'] as $key => $value) {
        echo "<option>" . $value . "</option>";
    }
    echo "</select><input type='submit' name='enviar' value='Enviar'></form>";
} else {
    header("Location:./vistas/form.html");
}
