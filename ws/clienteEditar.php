<?php

setlocale(LC_TIME, "es_ES.utf8");
date_default_timezone_set('America/Lima');
session_start(['cookie_lifetime' => 86400,]);

$correo=$_POST['correo'];
$nombre=$_POST['nombre'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];

include_once('lib/nusoap.php');
include_once('Entidades/BD.php');
$cliente = new nusoap_client("https://php1-kennygonzales.c9users.io/ws/registro.php",false);

$parametros = array('correo' => $correo,'nombre' => $nombre,'telefono' => $telefono,'direccion' => $direccion);
$_SESSION['test']=$parametros;
$respuesta = $cliente->call("edit",$parametros);

if (isset($respuesta['faultstring'])){
    $_SESSION['error']=$respuesta['faultstring'];
    $_SESSION['pagina']=3;
} else {
    $usuario= new Usuario();
    $_SESSION['usuario']=$usuario->mostrar($correo);
    $_SESSION['pagina']=3;
    //var_dump($usuario->mostrar($dni));
}
header("Location:https://php1-kennygonzales.c9users.io");

//var_dump("$nombre $correo");
//var_dump($_POST);

?>