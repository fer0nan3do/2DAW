<?php
echo "<form method='POST' enctype='multipart/form-data'>
<select name='" . $nombre . "'>
    <option>" . $opciones[0] . "</opction>
    <option>" . $opciones[1] . "</opction>
    <option>" . $opciones[2] . "</opction>
</select>
Subir archivo: 
<input type='file' name='archivo'><br>
<input type='submit' name='enviar' value='Enviar'>
</form>";
