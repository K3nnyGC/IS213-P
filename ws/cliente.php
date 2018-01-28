<?php
$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$password=$_POST['password'];
$dni=$_POST['dni'];
include_once('lib/nusoap.php');
$cliente = new nusoap_client("https://php1-kennygonzales.c9users.io/ws/registro.php",false);

$parametros = array('nombre' => $nombre,'correo' => $correo,'password' => $password,'dni' => $dni );

$respusta = $cliente->call("signup",$parametros);

echo $respusta;
//var_dump("$nombre $correo");
//var_dump($_POST);

?>