var input;
function crear(){
    for (i = 0; i < 100; i++) {
        input = document.createElement("input");
        input.type = "checkbox";
        input.name = "michbox";
        input.id = i;
        input.value = 10;
        var etiqueta = document.createElement("label");
        var texto = document.createTextNode(Math.floor(Math.random() * 100));
        etiqueta.appendChild(texto);
        document.body.appendChild(input);
        document.body.appendChild(etiqueta);
        
    }
}
function checkFalse(){
    for (i = 0; i < 100; i++) {
        document.getElementById(i).checked = false;
        
    }
}
function checkTrue(){
    for (i = 0; i < 100; i++) {
        document.getElementById(i).checked = true;
        
    }
}