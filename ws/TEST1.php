<?php
$nombre="Bobby4";
$correo="underrat@wau.wau";
$password="45372345";
$dni="45372833";
include_once('lib/nusoap.php');
$cliente = new nusoap_client("https://php1-kennygonzales.c9users.io/ws/registro.php",false);

$parametros = array('nombre' => $nombre,'correo' => $correo,'password' => $password,'dni' => $dni );

$respuesta = $cliente->call("signup",$parametros);

if (isset($respuesta['faultstring'])){
    echo $respuesta['faultstring'];
} else {
    echo $respuesta;
}

?>