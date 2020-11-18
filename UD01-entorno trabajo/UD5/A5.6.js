function anadoFila() {
    var tabla_body = document.getElementById("body");
    var nombre = document.getElementById("producto").value;
    var cantidad = document.getElementById("cantidad").value;
    var precio = document.getElementById("precio").value;
    var precioTotal = cantidad * precio;

    console.log(tabla_body[0]);

    var fila = document.createElement("tr");
    var col1 = document.createElement("td");
    var col2 = document.createElement("td");
    var col3 = document.createElement("td");
    var col4 = document.createElement("td");
    col4.setAttribute("class", "precioTotal");
    var col5 = document.createElement("td");

    col1.innerHTML = nombre;
    col2.innerHTML = cantidad;
    col3.innerHTML = precio;
    col4.innerHTML = precioTotal;

    fila.appendChild(col1);
    fila.appendChild(col2);
    fila.appendChild(col3);
    fila.appendChild(col4);
    tabla_body.appendChild(fila);
    calculoTotal();

}
function calculoTotal(){
    var preciosTotales = document.getElementsByClassName("precioTotal");
    var base = 0;
    for (i = 0; i < preciosTotales.length; i++) {
        base += preciosTotales[i].innerHTML;
        console.log(preciosTotales);
    }
    document.getElementById("base").innerHTML = base + "€";
    var iva = base * 0.21;
    document.getElementById("iva").innerHTML = iva + "€";
    document.getElementById("total").innerHTML = base + iva + "€";
}