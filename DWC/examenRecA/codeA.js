$(document).ready(function () {
    $("#a_modal").on("click", function () {
        $("#modal").show();
    });
    $("#c_modal").on("click", function () {
        $("#modal").hide();
    });
    $("#enviar_municipio").on("click", function(){
        enviarMunicipio();
    });
    listarMunicipios();
});
function listarMunicipios() {
    $.ajax({
        url: "php/listo_municipio.php",
        type: "POST",
        dataType: "json",
        success: function (respuesta) {
            for (var key in respuesta) {
                var img;
                if (respuesta.c == 0) {
                    img = "sol.png"
                } else if (respuesta[key].c == 1) {
                    img = "nubes.png"
                } else if (respuesta[key].c == 2) {
                    img = "lluvia.png"
                } else if (respuesta[key].c == 3) {
                    img = "nieve.png"
                }
                $("#municipios").append("<div class='municipio'>" + respuesta[key].fecha + " - " + respuesta[key].n +
                    "<img src='img/" + img + "'></img>" +
                    "<span class='max'>Max: " + respuesta[key].max + "</span>" +
                    "<span class='max'>Max: " + respuesta[key].max + "</span></div>");
                $(".municipio").on("click", function () {
                    $(".municipio").removeClass("destacado");
                    $(this).addClass("destacado")
                });
            }
        },
        error: function (xhr, status) {
            alert("Problema");
        }
    });
}
function enviarMunicipio() {
    var objeto = {n: $("#municipio").val(), c: $("#cielo").val(), fecha: "s", max: $("#maxima").val(), min: $("#minima").val()};
    $.ajax({
        url: "php/anyado_municipio.php",
        type: "POST",
        data: objeto,
        dataType: "json",
        success: function (respuesta) {
            if(respuesta){
                $("#municipios").append("<div class='municipio'>" + objeto.fecha + " - " + objeto.n +
                    "<img src='img/" + img + "'></img>" +
                    "<span class='max'>Max: " + objeto.max + "</span>" +
                    "<span class='max'>Max: " + objeto.max + "</span></div>");
            }else{
                alert("culo");
            }
        },
        error: function (xhr, status) {
            alert("problema XD");
        }
    });
}