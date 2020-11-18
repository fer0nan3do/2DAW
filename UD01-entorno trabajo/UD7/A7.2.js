function funcion_ajax() {
    var conexion = new XMLHttpRequest();
    conexion.onreadystatechange = function () {
        if (conexion.readyState == 4 && conexion.status == 200) {
            var objetoRespuesta = JSON.parse(conexion.responseText);
            console.log(objetoRespuesta);
            var miselect = document.createElement("select");
            for (var i in objetoRespuesta.provincias) {
                console.log(objetoRespuesta.provincias[i].nom);
                var option_provincia = document.createElement("option");
                option_provincia.setAttribute("value", objetoRespuesta.provincias);
                option_provincia.innerText = objetoRespuesta.provincias[i].nom;
                miselect.appendChild(option_provincia);
            }
            miselect.addEventListener("change", function () {
                console.log(miselect.options);
                document.getElementById("cp").innerText = miselect.options[this.selectedIndex].value;
            });
            document.getElementById("contenido").appendChild(miselect);
        }
    }
    conexion.open("GET", "provincias.json", true);
    conexion.send();
}