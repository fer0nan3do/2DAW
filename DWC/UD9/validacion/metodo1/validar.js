window.onload = function () {
    var botonEnviar = document.getElementById("enviar");
    botonEnviar.addEventListener("click", (evento) => {
        if(validacion(evento)){
            alert("form ok");
        }else{
            alert("form NO ok");
        }
    });
}
function validacion(evento) {
    evento.preventDefault();
    var nombre = document.getElementById("nombre").value;
    var edad = document.getElementById("edad").value;
    var correo = document.getElementById("correo").value;
    var fecha = document.getElementById("fecha").value;
    var selector = document.getElementById("selector").value;
    var checkbox = document.getElementById("checkbox");
    var radioButton = document.getElementsByName("radioButton");
    var seleccionado = false;
    for (i = 0; i < radioButton.length; i++) {
        if (radioButton[i].checked) {
            seleccionado = true;
            break;
        }
    }
    if (nombre == null || nombre.length == 0) {
        alert("El nombre no puede estar vacio");
        return false;
    }
    else if (edad == null || edad.length == 0) {
        alert("La edad no puede estar vacía");
        return false;
    }
    else if (!parseInt(edad)) {
        alert("La edad debe ser un número")
        return false;
    }
    else if (edad <= 0 || edad >= 100) {
        alert("La edad debe ser mayor de 0 y menor de 100");
        return false;
    }
    else if (!(/\S+@\S+\.\S+/.test(correo))) {
        alert("La dirección de email no es válida")
        return false;
    }
    else if (!isNaN(fecha)) {
        alert("La fecha no es válida")
        return false;
    }
    else if (selector == null || selector == 0) {
        alert("Se debe elegir un valor del select y no puede ser el primero");
        return false;
    }
    else if (!checkbox.checked) {
        alert("Se debe seleccionar un check");
        return false;
    }
    else if (!seleccionado) {
        alert("Se debe seleccionar un radio button");
        return false;
    }else{
        return true;
    }
}