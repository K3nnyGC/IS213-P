<?php
setlocale(LC_TIME, "es_ES.utf8");
date_default_timezone_set('America/Lima');
session_start(['cookie_lifetime' => 86400,]);
$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
include_once('lib/nusoap.php');
$cliente = new nusoap_client("https://php1-kennygonzales.c9users.io/ws/registro.php",false);

$parametros = array('nombre' => $nombre,'correo' => $correo );

$respusta = $cliente->call("signup",$parametros);

echo $respusta;
//var_dump("$nombre $correo");
//var_dump($_POST);

?>