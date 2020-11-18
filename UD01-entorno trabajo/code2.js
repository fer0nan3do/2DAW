var tablero = new Array;
tablero[0] = ["_", "_", "_"];
tablero[1] = ["_", "o", "_"];
tablero[2] = ["_", "_", "_"];
console.log(tablero);
var finPartida = false;
function pinto_tablero() {

    for (i = 0; i <= 2; i++) {
        for (j = 0; j <= 2; j++) {
            var id_casilla = "casilla_" + i + j;
            document.getElementById(id_casilla).value = tablero[i][j];

        }
        document.getElementById("casilla_00").innerHTML = "<img src='img/x.png'";

    }
}
function jugada() {
    for (i = 0; i <= 2; i++) {
        for (j = 0; j <= 2; j++) {
            var id_casilla = "casilla_" + i + j;
            tablero[i][j] = document.getElementById(id_casilla).value;
            if (tablero[i][j] != "o" && tablero[i][j] != "_") {
                tablero[i][j] = "x";
            }

        }


    }
    console.log(tablero);
    comprobarGanador();
    if(finPartida = true){
        location.reload;
    }
    tiradaMaquina();
    comprobarGanador();
}
function tiradaMaquina() {
    //aleatorio para añadir 0
    jugada_x = Math.floor(Math.random() * 3);
    jugada_y = Math.floor(Math.random() * 3);
    console.log(jugada_x + "" + jugada_y);
    if (tablero[jugada_x][jugada_y] = "_") {
        tablero[jugada_x][jugada_y] = "o";
        pinto_tablero();
    } else {
        tiradaMaquina();
    }

}
function comprobarGanador() {
    //comprobar si hay condiciones de victoria
    if (tablero[0][0] == tablero[0][1] && (tablero[0][1] == tablero[0][2]) && tablero[0][0] != "_") {
        alert("Has ganado");
        finPartida = true;
        location.reload;
    }
    if (tablero[1][0] == tablero[1][1] && (tablero[1][1] == tablero[1][2]) && tablero[1][0] != "_") {
        alert("Has ganado");
        finPartida = true;
        location.reload;
    }
    if (tablero[2][0] == tablero[2][1] && (tablero[2][1] == tablero[2][2]) && tablero[2][0] != "_") {
        alert("Has ganado");
        finPartida = true;
        location.reload;
    }
    if (tablero[0][0] == tablero[1][0] && (tablero[1][0] == tablero[2][0]) && tablero[0][0] != "_") {
        alert("Has ganado");
        finPartida = true;
        location.reload;
    }
    if (tablero[0][1] == tablero[1][1] && (tablero[1][1] == tablero[2][1]) && tablero[0][1] != "_") {
        alert("Has ganado");
        finPartida = true;
        location.reload;
    }
    if (tablero[0][2] == tablero[1][2] && (tablero[1][2] == tablero[2][2]) && tablero[0][2] != "_") {
        alert("Has ganado");
        finPartida = true;
        location.reload;
    }
    if (tablero[0][0] == tablero[1][1] && (tablero[1][1] == tablero[2][2]) && tablero[0][0] != "_") {
        alert("Has ganado");
        finPartida = true;
        location.reload;
    }
    if (tablero[0][2] == tablero[1][1] && (tablero[1][1] == tablero[2][0]) && tablero[0][2] != "_") {
        alert("Has ganado");
        finPartida = true;
        location.reload;
    }
}
