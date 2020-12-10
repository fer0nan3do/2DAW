$(document).ready(function () {
    console.log("jquery ok");
    cargo_preguntas();
    $("#ok").on("click", function () {
        compruebo_preguntas();
    });
    $("#borrar").on("click", function () {
        $("#preguntas").html("");
        $("#acertadas").html("");
        cargo_preguntas();
    });
    var temp = 0;
    var temporizador = setInterval(function () {
        temp++;
        $("#tiempo").html(temp/100);
    }, 10);
});
function cargo_preguntas() {
    /*$.ajax({
        url: "preguntas.json",
        type: "POST",
        dataType: "json",
    })
        .done(function (datos) {
            console.log(datos);
            for (i = 0; i < datos.preguntas.length; i++) {
                $("#preguntas").append("<div>" + datos.preguntas[i].pregunta + "</div>");
                $.each(datos.preguntas[i].respuesta, function (key, value) {
                    console.log("key: " + key + " value: " + value);
                    var radio = "<input type='radio' class='respuesta'" + i + " name='respuesta'" + i + "'value='" + key + "'>" + key + " = " + value + "</input>";
                    $("#preguntas").append(radio);
                });

            }
        })*/
    $.ajax({
        url: "preguntas.json",
        type: "POST",
        dataType: "json",
    })
        .done(function (datos) {

            console.log(datos);
            for (i = 0; i < datos.preguntas.length; i++) {
                $("#preguntas").append("<div id='pregunta" + i + "'>" + datos.preguntas[i].pregunta + "</div>");
                console.log(datos.preguntas[i].pregunta);
                $.each(datos.preguntas[i].respuesta, function (key, value) {
                    console.log("key : " + key + "Value :" + value);
                    var radio = "<input type = 'radio' class='respuesta" + i + "' name= 'respuesta " + i + " ' value='" + key + "'>" + key + "=" + value + " </input>";
                    $("#preguntas").append(radio);
                });
            }

            //con la respuesta itero
            //el json para montar la pgrunta + radio buttons de respuesta

        })
        .fail(function (jqXHR, testStatus, errorThrown) {
            console.log("La solicitud ha fallado: " + textStatus + errorThrown);
        });
}
function compruebo_preguntas() {
    $.ajax({
        url: "preguntas.json",
        type: "POST",
        dataType: "json",
    })
        .done(function (datos) {
            var correctas = 0;
            for (i = 0; i < datos.preguntas.length; i++) {
                console.log(datos.preguntas[i].respuesta);
                console.log($(".respuesta" + i + ":checked").val());
                if (datos.preguntas[i].correcta == $(".respuesta" + i + ":checked").val()) {
                    $("#pregunta" + i).css({ "background-color": "green" });
                    correctas++;
                } else {
                    $("#pregunta" + i).css({ "background-color": "red" });
                }
            }
            $("#acertadas").html("Acertadas: " + correctas);
        })
        .fail(function (jqXHR, testStatus, errorThrown) {
            console.log("La solicitud ha fallado: " + textStatus + errorThrown);
        });
}
