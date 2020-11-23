$(document).ready(function(){
    console.log('jquery ok');
    $("#nuevo").click(function(){
        $("#crearcliente").show();
    })
    $("#crearnuevo").click(function() {
        dniCliente = $("#nuevodni").val();
        nombre = $("#nuevousuario").val();
        direccion = $("#nuevadireccion").val();
        email = $("#nuevoemail").val();
        agregarCliente(dniCliente, nombre, direccion, email);
        actualizar();
        $("#crearcliente").hide();
    });
    $("#cancelarnuevo").click(function(){
        $("#crearcliente").hide();
    });
    $("#cerrarVentanaModificar").click(function() {
        $("#modificar_cliente").hide();
    });
    $("#cancelareliminar").click(function() {
        $("#eliminar").hide();
    });
    $("#botonconfirmar").click(function() {
        $("#confirmar").hide();
    });
    $("#botonmodificar").click(function() {
        $("#confirmarmodificar").hide();
    });
    $("#modificar").click(function() {
        dni = $("#modificardni").val();
        nombre = $("#modificarusuario").val();
        direccion = $("#modificardireccion").val();
        email = $("#modificaremail").val();
        modificarCliente(dni, nombre, direccion, email);
        actualizar();
        $("#modificarcliente").hide();
    });
    rellenartabla();
});
function rellenartabla() {
    $.ajax({
        type: "GET",
        url: "../controladores/listarclientes.php",
        dataType: "json",
        success: function(respuesta) {
            for (i = 0; i < respuesta.length; i++) {
                tabla = "<tr class='trclientes' id='" + respuesta[i].dniCliente + "'><td>" + respuesta[i].dniCliente + "</td>";
                tabla += "<td>" + respuesta[i].nombre + "</td>";
                tabla += "<td><button data-dni='" + respuesta[i].dniCliente + "' data-nombre='" + respuesta[i].nombre + "' data-direc='" + respuesta[i].direccion + "' data-email='" + respuesta[i].email + "'class='modificartabla' id='modificar" + i + "'>Editar</button>";
                tabla += "<button class='borrartabla' id='eliminar" + i + "'>Borrar</button>";
                tabla += "</td></tr>";
                $('#clientes').append(tabla);
                $("#eliminar" + i).click(function() {
                    clienteEliminar = $(this).parent().parent().attr("id");
                    $("#eliminar").show();
                });
                $("#confirmareliminar").click(function() {
                    borrarCliente(clienteEliminar);
                    $("#" + clienteEliminar).closest('tr').remove();
                    $("#eliminar").hide();
                });
                $("#modificar" + i).click(function() {
                    data = $(this).data();
                    $("#modificardni").val(data.dni);
                    $("#modificarusuario").val(data.nombre);
                    $("#modificardireccion").val(data.direc);
                    $("#modificaremail").val(data.email);
                    $("#modificarcliente").show();
                });
            }
        }
    });
}
function actualizar() {
    $('#clientes').empty();
    setTimeout(function() { rellenartabla(); }, 100);
}
function agregarCliente(dniCliente, nombre, direccion, email) {
    $.ajax({
        type: "GET",
        url: "../controladores/nuevocliente.php",
        data: { dniCliente: dniCliente, nombre: nombre, direccion: direccion, email: email },
        dataType: "json",
        success: function(respuesta) {
            $("#confirmar").show();
        }
    });
}
function borrarCliente(dni) {
    $.ajax({
        type: "GET",
        url: "../controladores/eliminarcliente.php",
        data: { dni: dni },
        dataType: "json",
        success: function(respuesta) {}
    });
}
function modificarCliente(dni, nombre, direccion, email) {
    $.ajax({
        type: "GET",
        url: "../controladores/modificarcliente.php",
        data: { dni: dni, nombre: nombre, direccion: direccion, email: email },
        dataType: "json",
        success: function(respuesta) {
            $("#confirmarmodificar").show();
        }
    });
}