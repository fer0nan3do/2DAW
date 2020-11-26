function validacion() {
    var nombre = document.getElementsByName("nombre");
    var edad = document.getElementsByName("edad");
    var correo = document.getElementsByName("correo");
    var fecha = document.getElementsByName("fecha");
    var selector = document.getElementsByName("selector");
    var checkbox = document.getElementsByName("checkbox");
    var radioButton = document.getElementsByName("radioButton");
    var seleccionado = false;
    for (i = 0; i < radioButton.length; i++) {
        if (radioButton[i].checked) {
            seleccionado = true;
            break;
        }
    }
    if (nombre == null) {
        alert("El nombre no puede estar vacio");
        return false;
    }
    else if (edad == null) {
        alert("La edad no puede estar vacía");
        return false;
    }
    else if (parseInt(edad)) {
        alert("La edad debe ser un número")
        return false;
    }
    else if (edad <= 0 || edad >= 100) {
        alert("La edad debe ser mayor de 0 y menor de 100");
        return false;
    }
    else if (correo != "" + "@" + "" + "." + "") {
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
    }
}