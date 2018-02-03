<?php

setlocale(LC_TIME, "es_ES.utf8");
date_default_timezone_set('America/Lima');
session_start(['cookie_lifetime' => 86400,]);

$nombre="Monica Carbajal";
$correo="mcarbajal8@expressjeans.com";
$password="12345";
$dni="888";

include_once('lib/nusoap.php');
include_once('Entidades/BD.php');
$cliente = new nusoap_client("https://php1-kennygonzales.c9users.io/ws/registro.php",false);

$parametros = array('nombre' => $nombre,'correo' => $correo,'password' => $password,'dni' => $dni );

$respuesta = $cliente->call("signup",$parametros);

if (isset($respuesta['faultstring'])){
    echo $_SESSION['error']=$respuesta['faultstring'];
    $_SESSION['pagina']=0;
} else {
    $usuario= new Usuario();
    $_SESSION['usuario']=$usuario->mostrar($dni);
    $_SESSION['pagina']=3;
}

header("Location:https://php1-kennygonzales.c9users.io");

?>