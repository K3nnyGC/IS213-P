<?php
header("Access-Control-Allow-Origin: *");
setlocale(LC_TIME, "es_ES.utf8");
date_default_timezone_set('America/Lima');
session_start(['cookie_lifetime' => 86400,]);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            MyLittlechucky
        </title>
        <LINK REL=StyleSheet HREF='assets/css/home.css' TYPE='text/css' MEDIA=screen>
        
        <link rel='stylesheet' href='assets/css/css/font-awesome.min.css'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
	     <!-- Latest compiled and minified CSS -->
	    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>

	    <!-- jQuery library -->
	    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>

	    <!-- Latest compiled JavaScript -->
	    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script> 
    </head>
    <body>
        <header class="home-titulo">
        <h1>
            MyLittleChucky
        </h1>
        </header>
        <nav>
        </nav>
        <div class="jumbotron home-1">
        <div id="home-formulario">
            <form name="formulario" action="ws/cliente.php"  METHOD='POST'>
              <p>Nombre:</p>
              <input type="text" NAME="nombre" placeholder="Nombre" />
              <br>
              <p>Correo:</p>
              <input type="text" NAME="correo" placeholder="Correo" />
              <div id="msg-mail"><br></div>
            </form>
            <div id="btn-enviar">Enviar</div>
        </div>
        </div>
        <footer>
            
        </footer>
        <script type='text/javascript' src='assets/js/home.js'></script>
    </body>
    
</html>