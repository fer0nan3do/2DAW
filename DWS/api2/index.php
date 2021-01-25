<?php
$municipio =json_decode(file_get_contents("https://api.nasa.gov/planetary/apod?api_key=sk1mKvLicboTTuGP8kDFIXa0V9Ay1nO0cTCa5zi1"));
$tabla="<table style='border: solid black 1px'>";
foreach ($respuesta as $key => $value) {
$tabla.="<tr> <td>$key</td> ";
foreach ($value as $key2 => $value2) {
    $tabla.="<tr><td>$key2</td></tr>  <tr><td>$value2 </td></tr>";
    
    }
$tabla.="</tr>";
}
$tabla.="</table>";
echo $tabla;