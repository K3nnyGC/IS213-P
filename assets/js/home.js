$("#btn-enviar").click(function() {
    var error=false;
    $("#msg-mail").html( "<br>" );
    //$("#msg-name").html( "<br>" );
    $("#msg-password").html( "<br>" );
    $("#msg-password2").html( "<br>" );
    $(this).html( "<i class='fa fa-spinner fa-spin fa-1x fa-fw'></i>Enviando..." );
    var urlser = 'https://mailjagger.ga/api/validate/'+document.formulario.correo.value; //url servicio
    urlser='https://apilayer.net/api/check?access_key=1263ca9fcc8ce212bedcf6c2e2459951&email='+document.formulario.correo.value+'&callback=CALLBACK_FUNCTION';
    var datosjs = {
      };
      
     $.ajax({
          type: "get",
          url: urlser,
          timeout: 8000,
          dataType: "jsonp",
          success: function(data){
              console.log(data);
              
                if (data.format_valid == true){
                    
                } else {
                    $("#msg-mail").html( "Error! El correo no es valido" );
                    $("#msg-mail").fadeIn("slow");
                    error=true;
                }
                if (document.formulario.password.value == document.formulario.password2.value){
                    
                } else {
                    $("#msg-password").html( "Error! Las claves no son iguales" );
                    $("#msg-password").fadeIn("slow");
                    error=true;
                }
                //if (document.formulario.nombre.value == ""){
                  //  $("#msg-name").html( "Este campo no puede quedar vacio" );
                   // $("#msg-name").fadeIn("slow");
                    //error=true;
                //}
                if (document.formulario.correo.value == ""){
                    $("#msg-mail").html( "Este campo no puede quedar vacio" );
                    $("#msg-mail").fadeIn("slow");
                    error=true;
                }
                if (document.formulario.password.value == ""){
                    $("#msg-password").html( "Este campo no puede quedar vacio" );
                    $("#msg-password").fadeIn("slow");
                    error=true;
                }
                if (document.formulario.password2.value == ""){
                    $("#msg-password2").html( "Este campo no puede quedar vacio" );
                    $("#msg-password2").fadeIn("slow");
                    error=true;
                }
                if (document.formulario.dni.value == ""){
                    $("#msg-dni").html( "Este campo no puede quedar vacio" );
                    $("#msg-dni").fadeIn("slow");
                    error=true;
                }
                
                if (error==true){
                    $("#btn-enviar").html( "Enviar" );
                } else {
                    document.formulario.submit();
                    
                }
              
              
          }
      });
});


$("#btn-enviar2").click(function() {
    var error=false;
    $("#msg-mail2").html( "<br>" );
    $("#msg-password2").html( "<br>" );
    $(this).html( "<i class='fa fa-spinner fa-spin fa-1x fa-fw'></i>Enviando..." );
    var urlser = 'https://mailjagger.ga/api/validate/'+document.formulario2.correo.value; //url servicio
    urlser='https://apilayer.net/api/check?access_key=1263ca9fcc8ce212bedcf6c2e2459951&email='+document.formulario2.correo.value+'&callback=CALLBACK_FUNCTION';
    var datosjs = {
      };
      
     $.ajax({
          type: "get",
          url: urlser,
          timeout: 8000,
          dataType: "jsonp",
          success: function(data){
              console.log(data);
              
                if (data.format_valid == true){
                    
                } else {
                    $("#msg-mail2").html( "Error! El correo no es valido" );
                    $("#msg-mail2").fadeIn("slow");
                    error=true;
                }

                if (document.formulario2.correo.value == ""){
                    $("#msg-mail2").html( "Este campo no puede quedar vacio" );
                    $("#msg-mail2").fadeIn("slow");
                    error=true;
                }
                if (document.formulario2.password.value == ""){
                    $("#msg-password2").html( "Este campo no puede quedar vacio" );
                    $("#msg-password2").fadeIn("slow");
                    error=true;
                }


                if (error==true){
                    $("#btn-enviar2").html( "Enviar" );
                } else {
                    document.formulario2.submit();
                    
                }
              
              
          }
      });
});




$("#b-login").click(function() {
    $("#sombra").show();
    $("#img-centro").toggleClass("sombra");
    $("#home-formulario2").slideToggle("low");
    $("#home-formulario").hide();
});

$("#cerrar2").click(function() {
    $("#sombra").fadeOut();
    $("#img-centro").toggleClass("sombra");
    $("#home-formulario2").slideToggle("low");
    $("#home-formulario").hide();
});

$("#cerrar").click(function() {
    $("#sombra").fadeOut();
    $("#img-centro").toggleClass("sombra");
    $("#home-formulario").slideToggle("low");
    $("#home-formulario2").hide();
});


$("#b-signup").click(function() {
    $("#sombra").show();
    $("#img-centro").toggleClass("sombra");
    $("#home-formulario").slideToggle("low");
    $("#home-formulario2").hide();
});
