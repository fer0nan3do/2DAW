$(document).ready(function () {
    $.ajax({
        url: '../servidor/cargaProvinciasJSON.php',
        type: 'POST',
        dataType: 'json',
        success: function (respuesta) {
            for (var key in respuesta) {
                $("#provincias").append("<option value='" + key + "'>" + respuesta[key] + "</option>");
            }
        },
        error: function (xhr, status) {
            alert('Disculpe, existió un problema');
        },
    });
    $("#provincias").change(function () {
        var codigo_provincia = $("#provincias option:selected").val();
        console.log(codigo_provincia);
        var dato_enviar = { "provincia": codigo_provincia };
        $.ajax({
            url: '../servidor/cargaMunicipiosJSON.php',
            type: 'POST',
            data: dato_enviar,
            dataType: 'json',
            success: function (respuesta) {
                for (var key in respuesta) {
                    $("#municipio").append("<option value='" + key + "'>" + respuesta[key] + "</option>");
                }
            },
            error: function (xhr, status) {
                alert('Disculpe, existió un problema');
            },
        });
    });
    $("#municipio").change(function () {
        var nom_provincia = $("#provincias option:selected").text();
        var nom_muni = $("#municipio option:selected").text();
        $("#seleccion").html("Provincia: " + nom_provincia + ", Muinicipio: " + nom_muni);
    });
});