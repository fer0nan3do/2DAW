$(document).ready(function () {
    console.log("jquery ok");
    $("#abrir_modal").on("click", function () {
        $("#modal_nueva_carta").show();
    });
    $("#cerrar_modal").on("click", function () {
        $("#modal_nueva_carta").hide();
    });
    $("#enviar_carta").on("click", function () {
        listo_cartas();
    });
    listo_cartas();
    $("#enviar_carta").on("click", function () {
        fecha = $(".fecha_carta").val();
        r1 = $(".regalo1").val();
        r2 = $(".regalo2").val();
        r3 = $(".regalo3").val();
        p1 = $(".preferencia1").val();
        p2 = $(".preferencia2").val();
        p3 = $(".preferencia3").val();
        envio_carta(fecha, r1, r2, r3, p1, p2, p3);
    });
    $("#carta").validate({
        rules: {
            regalo1: {
                required: true,
                maxlength: 15,
            },
            regalo2: {
                required: true,
                maxlength: 15,
            },
            regalo3: {
                required: true,
                maxlength: 15,
            },
            preferencia1: {
                required: true,
            },
            preferencia2: {
                required: true,
            },
            preferencia3: {
                required: true,
            },
        },
        messages: {
            regalo1: {
                required: "Este campo es obligatorio",
                maxlength: "Máximo 15 carácteres",
            },
            regalo2: {
                required: "Este campo es obligatorio",
                maxlength: "Máximo 15 carácteres",
            },
            regalo3: {
                required: "Este campo es obligatorio",
                maxlength: "Máximo 15 carácteres",
            },
            preferencia1: {
                required: "Este campo es obligatorio",
            },
            preferencia2: {
                required: "Este campo es obligatorio",
            },
            preferencia3: {
                required: "Este campo es obligatorio",
            },
        }
    })
});
function listo_cartas() {
    $.ajax({
        url: "php/listo_cartas.php",
        type: "POST",
        dataType: "json",
    })
        .done(function (datos) {

            console.log(datos);
            for (i = 0; i < datos.length; i++) {
                $("#cartas").append("<div class='carta' style='border: 1px solid black; margin: 5px;'><input class='fecha_carta' type='hidden' value='" + datos[i].fecha + "'></input>" + datos[i].regalo1 + " - " + datos[i].estrellas1 + " - " + datos[i].regalo2 + " - " + datos[i].estrellas2 + " - " + datos[i].regalo3 + " - " + datos[i].estrellas3 +
                    " - <input type = 'submit' id='borrar_carta" + i + "' name= 'borrar' value='Borrar'</input></div>");
                if (i == datos.length) {
                    $(".carta").css({ "background-color": "green" });
                }
                console.log($(".carta"));
                console.log(datos[i]);
            }
            $("#borrar_carta").on("click", function () {
                $(".carta").remove();
            });
        })
        .fail(function (jqXHR, testStatus, errorThrown) {
            console.log("La solicitud ha fallado: " + textStatus + errorThrown);
        });
}
function envio_carta(fecha, r1, r2, r3, p1, p2, p3) {
    $.ajax({
        type: "POST",
        url: "php/envio_carta.php",
        data: { fecha: fecha, r1: r1, r2: r2, r3: r3, p1: p1, p2: p2, p3: p3 },
        dataType: "json",
        success: function (respuesta) {
            if (respuesta == true) {
                alert("Carta enviada" + fecha + " correcta");
            } else if (respuesta == false) {
                alert("error");
            }
        }
    });
}