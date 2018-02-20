<?php

setlocale(LC_TIME, "es_ES.utf8");
date_default_timezone_set('America/Lima');
session_start(['cookie_lifetime' => 86400,]);

$asunto=$_POST['asunto'];
$descripcion=$_POST['mensaje'];
$usuario=$_SESSION['usuario']['id_user'];

$url = "http://evelynross-001-site1.htempurl.com/ServicioVarios.svc?wsdl";
try {
 $client = new SoapClient($url, [ "trace" => 1 ] );
 $result = $client->createConsulta( [
     'oContactoBE'=>[
         'asunto' => utf8_encode($asunto),
         'descripcion' => utf8_encode($descripcion),
         'idUsuario'=> $usuario
         ]
     ] );

} catch ( SoapFault $e ) {
 $_SESSION['error'] = $e->getMessage();
}

//var_dump($array);

header("Location:https://php1-kennygonzales.c9users.io/ws/clienteConsultas.php");
?>