<?php

setlocale(LC_TIME, "es_ES.utf8");
date_default_timezone_set('America/Lima');
session_start(['cookie_lifetime' => 86400,]);
$deudaActual=$_SESSION['iddeuda'];
$url = "http://evelynross-001-site1.htempurl.com/ServicioVarios.svc?wsdl";
try {
 $client = new SoapClient($url, [ "trace" => 1 ] );
 $result = $client->updateEstadoPagadoPorIdDeuda( ['idDeuda'=> $deudaActual,'pagado'=> true] );
} catch ( SoapFault $e ) {
    unset($_SESSION['ok']);
    $_SESSION['error'] = $e->getMessage();
}

//var_dump($array);
//var_dump($_SESSION);
header("Location:https://php1-kennygonzales.c9users.io/ws/clienteDeudas.php");
?>