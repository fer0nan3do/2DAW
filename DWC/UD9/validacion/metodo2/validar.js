$(document).ready(function () {
    console.log("jquery ok");
    $("#formulario").validate({
        rules: {
            nombre: {
                required: true,
            },
            edad: {
                required: true,
                max: 100,
                min: 1,
            },
            correo: {
                required: true
            }
        },
        messages: {
            nombre: {
                required: "Introduce un nombre",
            },
            edad: {
                required: "Introduce tu edad",
                max: "Máximo 100",
                min: "Mínimo 1",
            }
        }
    });
});
$.validator.setDefaults({

});