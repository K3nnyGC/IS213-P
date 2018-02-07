$("#salir").click(function() { document.salir.submit(); });
$("#inicio").click(function() { document.inicio.submit(); });
$("#perfil").click(function() { document.perfil.submit(); });
$("#notas").click(function() { document.notas.submit(); });
$("#horarios").click(function() { document.horarios.submit(); });
$("#pagos").click(function() { document.pagos.submit(); });
$("#deudas").click(function() { document.deudas.submit(); });

$("#boton-datos").click(function() {
    var error=false;
    $("#boton-datos").html( "<i class='fa fa-spinner fa-spin fa-1x fa-fw'></i>Enviando..." );
    $("#td-nombre").html( "<br>" );
    $("#td-telefono").html( "<br>" );
    $("#td-direccion").html( "<br>" );
    if (document.datos.nombre.value == ""){
        $("#td-nombre").html( "Este campo no puede quedar vacio" );
        $("#td-nombre").fadeIn("slow");
        error=true;
    }
    if (document.datos.telefono.value == ""){
        $("#td-telefono").html( "Este campo no puede quedar vacio" );
        $("#td-telefono").fadeIn("slow");
        error=true;
    }
    if (document.datos.direccion.value == ""){
        $("#td-direccion").html( "Este campo no puede quedar vacio" );
        $("#td-direccion").fadeIn("slow");
        error=true;
    }
    if (error==true){
        $("#boton-datos").html( "Enviar" );
    } else {
        document.datos.submit();
    }
});
