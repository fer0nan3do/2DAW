$(document).ready(function(){
    console.log("jqery ok");
    $("#nuevopedido").click(function() {
        $("#crearpedido").show();
        buscardni();
    });
    rellenartablapedidos();
    $("#crearnuevopedido").click(function() {
        idPedido = $("#nuevoIdPedido").val();
        fecha = $("#nuevaFecha").val();
        dniCliente = $("#nuevoDNICliente").val();
        agregarPedido(idPedido, fecha, dniCliente);
        actualizars();
        $("#crearpedido").hide();
    });
});
function rellenartablapedidos() {
    var mostrar = true;
    $.ajax({
        type: "GET",
        url: "../controladores/listarpedidos.php",
        dataType: "json",
        success: function(respuesta) {
            for (i = 0; i < respuesta.length; i++) {
                tabla = "<tr class='trpedidos' id='" + respuesta[i].idPedido + "'><td>" + respuesta[i].idPedido + "</td>";
                tabla += "<td>" + respuesta[i].fecha + "</td><td>" + respuesta[i].dniCliente + "</td>";
                tabla += "<td><button data-idPedido='" + respuesta[i].idPedido + "' class='botones_tabla_cliente boton_pedido' id='mostrarLineaPedidos" + respuesta[i].idPedido + "'><img src='../vistas/img/detalles.jpg' class='detalles'></button>";
                tabla += "<input type='hidden' id='mostrar" + respuesta[i].idPedido + "' value='true'>";
                tabla += "<button class='modificartabla' id='modificarPedido" + i + "' data-idPedido='" + respuesta[i].idPedido + "' data-fecha='" + respuesta[i].fecha + "' data-dniCliente='" + respuesta[i].dniCliente + "' >Modificar</button>";
                tabla += "<button class='borrartabla' id='eliminarPedido" + i + "'>Borrar</button>";
                tabla += "</td></tr>";
                $('#pedidos').append(tabla);
                $('#mostrarLineaPedidos' + respuesta[i].idPedido).click(function() {
                    idPedido = $(this).parent().parent().attr('id');
                    mostrar = $("#mostrar" + idPedido).val();
                    if (mostrar == "true") {
                        rellenar_lista_pedidos(idPedido);
                        $("#mostrar" + idPedido).val("false");
                    } else {
                        $("#tablaLineaPedido" + idPedido).remove();
                        $("#mostrar" + idPedido).val("true");
                    }
                });
                $("#eliminarPedido" + i).click(function() {
                    eliminarPedido = $(this).parent().parent().attr("id");
                    $("#eliminar").show();
                });
                $("#botoneliminar").click(function() {
                    borrarPedido(eliminarPedido);
                    $("#" + eliminarPedido).closest('tr').remove();
                    $("#eliminar").hide();
                });
                $("#modificarPedido" + i).click(function() {
                    data = $(this).data();
                    $("#modificarPedido").val(data.idpedido);
                    $("#modificarFecha").val(data.fecha);
                    $("#modificarCliente").val(data.dnicliente);
                    $("#modificarpedido").show();
                    mostrarModalModificarPedido();
                });
            }
        }
    });
}
function actualizar() {
    $('#pedidos').empty();
    $("#dnicliente").empty();
    $("#modificardnicliente").empty();
    setTimeout(function() { rellenartablapedidos(); }, 100);
}
function buscardni() {
    $.ajax({
        type: "GET",
        url: "../controladores/listarpedidos.php",
        dataType: "json",
        success: function(respuesta) {
            for (i = 0; i < respuesta.length; i++) {
                $("#dnicliente").append("<option>" + respuesta[i].dniCliente + "</option>");
            }
        }
    });
}