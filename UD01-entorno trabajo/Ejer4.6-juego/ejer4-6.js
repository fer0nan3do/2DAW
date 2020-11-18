var time = 0;
var rondas = 0;
var id = 0;
var id2;
var intervalo = setInterval(crono, 10);
function pintoCirculoRojo() {
    do {
        id = "circulo_" + aleatorio();
        console.log(id);
    } while (id == id2);
    id2 = id;
    rondas++;
    document.getElementById(id).className = "objetivo";
    document.getElementById(id).addEventListener("click", cambiarObjetivo);
}
function aleatorio() {
    var num = Math.floor(Math.random() * 9);
    return num;
}
function cambiarObjetivo() {
    time = 0;
    this.classList.remove("objetivo");
    this.removeEventListener("click", cambiarObjetivo);
    pintoCirculoRojo();
}
function crono() {
    time++;
    document.getElementById("cronometro").innerHTML = time;
    if (time == 300) {
        alert("Has perdido, has hecho " + rondas + " rondas");
        time = 0;
        location.reload;
    }
}