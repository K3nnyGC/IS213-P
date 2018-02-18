$("#salir").click(function() { document.salir.submit(); });
$("#inicio").click(function() { document.inicio.submit(); });
$("#perfil").click(function() { document.perfil.submit(); });
$("#notas").click(function() { document.notas.submit(); });
$("#horarios").click(function() { document.horarios.submit(); });
$("#pagos").click(function() { document.pagos.submit(); });
$("#deudas").click(function() { document.deudas.submit(); });
$("#consultas").click(function() { document.consultas.submit(); });

$("#salir2").click(function() { document.salir.submit(); });
$("#inicio2").click(function() { document.inicio.submit(); });
$("#perfil2").click(function() { document.perfil.submit(); });
$("#notas2").click(function() { document.notas.submit(); });
$("#horarios2").click(function() { document.horarios.submit(); });
$("#pagos2").click(function() { document.pagos.submit(); });
$("#deudas2").click(function() { document.deudas.submit(); });
$("#consultas2").click(function() { document.consultas.submit(); });

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

$("#cerrar").click(function() {
    $("#sombra").fadeOut();
    $("#payment").slideToggle("low");
});


$("#btn-enviar-pago").click(function() {
    var error=false;
    $("#btn-enviar-pago").html( "<i class='fa fa-spinner fa-spin fa-1x fa-fw'></i>Enviando..." );
    $("#msg-ncard").html( "<br>" );
    if (document.pago.tarjeta.value == ""){
        $("#msg-ncard").html( "Este campo no puede quedar vacio" );
        $("#msg-ncard").fadeIn("slow");
        error=true;
    }
    if (error==true){
        $("#btn-enviar-pago").html( "Enviar" );
    } else {
        document.pago.submit();
    }
});

$("#btn-enviar3").click(function() {
    var error=false;
    $("#asunto-error").html( "" );
    $("#mensaje-error").html( "" );
    if($("#campo-asunto").val()==""){
        error=true;
        $("#asunto-error").html( "Este campo no puede estar vacio!" );
    }
    if($("#campo-texto").val()==""){
        error=true;
        $("#mensaje-error").html( "Este campo no puede estar vacio!" );
    }
    if (error){
    }else{
    $("#btn-enviar3").html( "<i class='fa fa-spinner fa-spin fa-1x fa-fw'></i>Enviando..." );
    var form = document.createElement( "form" );
	form.setAttribute( "name", "comentarioform" );
	form.setAttribute( "action", "/ws/clienteConsultasCrear.php" );
	form.setAttribute( "method", "POST" );
	var input = document.createElement( "input" );
	input.setAttribute( "name", "asunto" );
	input.setAttribute( "type", "hidden" );
	input.setAttribute( "value", $("#campo-asunto").val() );
	var input2 = document.createElement( "input" );
	input2.setAttribute( "name", "mensaje" );
	input2.setAttribute( "type", "hidden" );
	input2.setAttribute( "value", $("#campo-texto").val() );
	form.appendChild( input );
	form.appendChild( input2 );
	document.getElementsByTagName( "body" )[0].appendChild( form );
	document.comentarioform.submit();
    }
});