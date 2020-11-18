function nuevoNum(){
    var nuevoElemento = document.createElement("li");
    var texto = document.createTextNode(Math.random());
    nuevoElemento.appendChild(texto);
    document.getElementById("lista").appendChild(nuevoElemento);
}