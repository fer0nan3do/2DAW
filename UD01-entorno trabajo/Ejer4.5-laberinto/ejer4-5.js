var crono = 0;
var reloj = setInterval(tiempo, 10);
var trampa = true;
function tiempo() {
    crono += 0.01;
    console.log(crono.toFixed(2));
}
function reiniciar() {
    crono = 0;
    trampa = false;
}
function perder() {
    alert("Has perdido, vuelve a empezar");
    trampa = true;
    location.reload;
}
function ganar() {
    if (trampa == false) {
        alert("Has tardado " + (crono.toFixed(2)) + " segundos");
        trampa = true;
        location.reload;
    } else {
        alert("No hagas trampas");
        location.reload;
    }

}