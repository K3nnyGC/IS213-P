<?php

setlocale(LC_TIME, "es_ES.utf8");
date_default_timezone_set('America/Lima');
session_start(['cookie_lifetime' => 86400,]);

$url = "http://evelynross-001-site1.htempurl.com/ServicioVarios.svc?wsdl";
try {
 $client = new SoapClient($url, [ "trace" => 1 ] );
 $result = $client->getReniec( [
         'dni' => $_POST['dni']
     ] );
} catch ( SoapFault $e ) {
 $error= $e->getMessage();
}

if (isset($error)){
    $_SESSION['error']="El dni #".$_POST['dni']." no existe!";
    header("Location:https://php1-kennygonzales.c9users.io");
} else {
    $resultadoA=$result->getReniecResult->nombreCompleto;
    $_SESSION['usuario']=['nombre'=>$resultadoA,'correo'=>$_POST['correo'],'password'=>$_POST['password'],'dni'=>$_POST['dni']];
    header("Location:https://php1-kennygonzales.c9users.io/ws/cliente.php");
    
}

//
?>