<?php

setlocale(LC_TIME, "es_ES.utf8");
date_default_timezone_set('America/Lima');
session_start(['cookie_lifetime' => 86400,]);


//$nombre=$_POST['nombre'];
//$correo=$_POST['correo'];
//$password=$_POST['password'];
//$dni=$_POST['dni'];

$nombre=$_SESSION['usuario']['nombre'];
$correo=$_SESSION['usuario']['correo'];
$password=$_SESSION['usuario']['password'];
$dni=$_SESSION['usuario']['dni'];


include_once('lib/nusoap.php');
//include_once('Entidades/BD.php');
$cliente = new nusoap_client("https://php1-kennygonzales.c9users.io/ws/registro.php",false);

$parametros = array('nombre' => $nombre,'correo' => $correo,'password' => $password,'dni' => $dni );

$respuesta = $cliente->call("signup",$parametros);

if (isset($respuesta['faultstring'])){
    $_SESSION['error']=$respuesta['faultstring'];
    $_SESSION['pagina']=0;
} else {
    //$usuario= new Usuario();
    //$_SESSION['usuario']=$usuario->mostrar($correo);
    $_SESSION['usuario']=$respuesta;
    $_SESSION['pagina']=3;
    //var_dump($usuario->mostrar($dni));
}
header("Location:https://php1-kennygonzales.c9users.io");

//var_dump("$nombre $correo");
//var_dump($_POST);

?>