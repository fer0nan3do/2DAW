<?php
$string = "";
if (isset($_GET['enviar'])) {

    if (isset($_GET['cod_pob'])) {
        setcookie('cod_pob', $_GET['cod_pob'],time()+360000);
        $url = "http://localhost/2DAW/DWS/penalbablazquezyadiraRec/yadira/penalba/".$_GET['cod_pob'];
        $respuesta = json_decode(file_get_contents($url), true);

        if ($respuesta != false){
            $string= "<select name='jugadorSelect'>";
            foreach ($respuesta as $cod_pob){
               
               $string.= "<option value='".$cod_pob['Nombre']."'>".$cod_pob['Nombre']."</option>";
            }   
            $string.= "</select>";
             require "../vistas/formularioJugador.php";
        }else {
                $error = "No existe ningún jugador con ese código <br> <a href='./penalba.php'>Volver a empezar</a>";
                require "../vistas/error.php";
   } 
} else
    $error = "El código de población no ha sido introducido";
    
} else {
     require "../vistas/formularioCodigo.php";
}  

