$(document).ready(function () {
    console.log("jquery ok");
    relleno_select();
    $("#producto").change(function () {
        var producto_sel = $("#prodcuto:selected").val();
        console.log(producto_sel);
        $("#puni").text(prodcuto_sel);
    })
    $("#anyadir").click(function () {
        $("#tabla tbody").append("<tr><td>" + $("#producto").text() + "</td><td>" + $("#cantidad").val() + "</td><td class='precio_fila'>" + $("#puni").val() + "</td><td>" + ($("#cantidad").val()) + "<td><button class='borrar>Borrar</button></td></tr>");
        $(".borrar").click(function (event) {
            $(this).parent().parent().remove();
        });
        recalcular();
    });
    recalcular();

});
function recalcular() {

    $(".precio_fila").each(function () {
        base += parseFloat($(this).text());
    });
    $("#base").text(base);
    $("#iva").text(base * (0.21));
    $("#total").text(base*(1.21));
}
function relleno_select() {
    $.ajax({
        // la URL para la petición
        url: 'productos.json',

        // especifica si será una petición POST o GET
        type: 'POST',

        // el tipo de información que se espera de respuesta
        dataType: 'json',

        // código a ejecutar si la petición es satisfactoria;
        // la respuesta es pasada como argumento a la función
        success: function (datos) {
            for (i = 0; i < datos.productos.length; i++) {
                $("#producto").append("<option value= '" + datos.productos[i].precio + "'>" + datos.productos[i].name + "</option>");
                console.log(datos.productos[1].sandia);
            }
        },

        // código a ejecutar si la petición falla;
        // son pasados como argumentos a la función
        // el objeto de la petición en crudo y código de estatus de la petición
        error: function (xhr, status) {
            alert('Disculpe, existió un problema');
        },

        // código a ejecutar sin importar si la petición falló o no
        complete: function (xhr, status) {
            alert('Petición realizada');
        }
    });
}