function crearVentana(x, y) {
    var opciones = "width=400 height=400, toolbar=0, scrollbars=0, left=" + x + ". right=" + y;
    var ventana = window.open("https://iesconselleria.edu.gva.es", "", opciones);
}
for (i = 0; i < 5; i++) {
    var alea1 = Math.floor(Math.random() * 600);
    var alea2 = Math.floor(Math.random() * 400);
    crearVentana(alea1, alea2);

}
var ventanaCerrar = crearVentana(0, 0);
setTimeout();
function cerrarVentana(){
    ventanaCerrar.close();
}