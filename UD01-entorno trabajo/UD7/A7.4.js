function enviar_peticion(accion){
    var conexion = new XMLHttpRequest();
    conexion.onreadystatechange = function(){
        if(conexion.readyState == 4){
            if(conexion.status == 200){
                console.log("ajax ok");
                document.getElementById("respuesta").innerText = conexion.responseText;
            }
        }
    }
    conexion.open("POST", "UD07-3AJAX.php", true);
    conexion.setRequestHeader("Content-Type", "aapplication/x-www-form-urlencoded");
    conexion.send('accion=' + accion);
}