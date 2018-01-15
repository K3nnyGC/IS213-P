$("#btn-enviar").click(function() {
    $("#msg-mail").html( "<br>" );
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
                    document.formulario.submit();
                } else {
                    $("#msg-mail").html( "Error! el mail no es valido" );
                    $("#msg-mail").fadeIn("slow");
                    $("#btn-enviar").html( "Enviar" );
                    //alert ('email invalido');
                }
              
              
          }
      });
});
