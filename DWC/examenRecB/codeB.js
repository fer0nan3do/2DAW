$(document).ready(function () {
    console.log("jqery ok");
    $.validator.setDefaults({
        submitHandler: function () {
            alert("formulario ok");
            envioDatos();
        }
    });
    $.validator.addMethod("valueNotEquals", function (value, element, arg) {
        return arg != value;
    });
    $("#datos_form").validate({
        rules: {
            temp: {
                required: true,
                max: 50,
            },
            icono: {
                required: true,
                valueNotEquals: "nada",
            },
            f: {
                required: true,
                min: 0,
            }
        },
        messages: {
            temp: {
                required: "No puede estar vacio",
                max: "La temperatura no puede ser mayor de 50",
            },
            icono: {
                required: "No puede estar vacio",
                valueNotEquals: "Debe seleccionar una opción",
            },
            f: {
                required: "No puede estar vacio ",
                min: "La fuerza no puede ser menor de 0",
            }
        }
    })
    $("#boton_modal").on("click", function () {
        $("#dato_modal").show();
    });
    $("#c_modal").on("click", function () {
        $("#dato_modal").hide();
    });
    $("#viento").on("click", function () {
        $("#i_icono").html("");
        if ($("#viento").val() == "n") {
            $("#i_icono").append("<img src='img/1.svg'></img>");
        } else if ($("#viento").val() == "s") {
            $("#i_icono").append("<img src='img/2.svg'></img>");
        } else if ($("#viento").val() == "e") {
            $("#i_icono").append("<img src='img/3.svg'></img>");
        } else if ($("#viento").val() == "o") {
            $("#i_icono").append("<img src='img/4.svg'></img>");
        }
    });

    listoDatos();
});
function listoDatos() {
    $.ajax({
        url: "php/listo_datos.php",
        type: "POST",
        dataType: "json",
        success: function (respuesta) {
            for (var key in respuesta) {
                var img = "";
                if (respuesta[key].dir == "n") {
                    img = "1.svg";
                } else if (respuesta[key].dir == "s") {
                    img = "2.svg";
                } else if (respuesta[key].dir == "e") {
                    img = "3.svg";
                } else if (respuesta[key].dir == "o") {
                    img = "4.svg";
                }
                $("#lista_datos").append("<div class='dato'>" + respuesta[key].hora +
                    "<span class='temp'>Temperatura: " + respuesta[key].temp + "º</span>" +
                    "<span class='viento'>Viento<img src='img/" + img + "'></img>" + respuesta[key].fza + " Km/h</span>" +
                    "<button class='destaco'>Destacar</button></div>");
                $(".destaco").on("click", function () {
                    $(".dato").removeClass("destacado");
                    $(this).parent().addClass("destacado")
                });
            }
        },
        error: function (xhr, status) {
            alert("problema");
        }
    })
}
function envioDatos() {
    var hora = new Date();
    var objeto = { hora: hora.toLocaleTimeString(), dir: $("#viento").val(), temp: $("#temp").val(), fza: $("#fuerza").val() };
    $.ajax({
        url: "php/anyado_dato.php",
        type: "POST",
        data: objeto,
        dataType: "json",
        success: function (respuesta) {
            if (respuesta) {
                var img = "";
                if (objeto.dir == "n") {
                    img = "1.svg";
                } else if (objeto.dir == "s") {
                    img = "2.svg";
                } else if (objeto.dir == "e") {
                    img = "3.svg";
                } else if (objeto.dir == "o") {
                    img = "4.svg";
                }
                $("#lista_datos").append("<div class='dato'>" + objeto.hora +
                    "<span class='temp'>Temperatura: " + objeto.temp + "º</span>" +
                    "<span class='viento'>Viento<img src='img/" + img + "'></img>" + objeto.fza + " Km/h</span>" +
                    "<button class='destaco'>Destacar</button></div>");
                $(".destaco").on("click", function () {
                    $(".dato").removeClass("destacado");
                    $(this).parent().addClass("destacado")
                });
            } else {
                alert("error");
            }

        },
        error: function (xhr, status) {
            alert("problema al enviar");
        }
    })
}