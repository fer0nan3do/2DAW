function pintoTabla() {
    var table = document.createElement("table");
    var num = 0;
    for (i = 0; i < 10; i++) {
        var fila = document.createElement("tr");
        for (j = 0; j < 10; j++) {
            num++;
            var celda = document.createElement("td");
            var texto = document.createTextNode(num);
            celda.appendChild(texto);
            fila.appendChild(celda);
            if(esCasiPrimo(num)){
                celda.style.backgroundColor = "yellow";
            }

        }
        table.appendChild(fila);
    }
    document.body.appendChild(table);
}
function esCasiPrimo(n) {

    var oportunidad = 0;
    for (i = 2; i < n; i++) {
        if (n % i == 0) {
            oportunidad++;
            if (oportunidad > 1) {
                return false;
            }
        }
    }

    if (oportunidad == 1)
        return true;
    else
        return false;
}