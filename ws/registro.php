<?php

include_once('lib/nusoap.php');
include_once('Entidades/BD.php');
include_once('Errores/usuarioError.php');

$servicio= new soap_server();

$ns="urn:regsitrowsdl";
$servicio->configureWSDL("Servicio de Registro en Intranet",$ns);
$servicio->schemaTargetNamespace = $ns;

//Metodo 1
$servicio->register("signup",
                    array('nombre' => 'xsd:string','correo' => 'xsd:string','password' => 'xsd:string','dni' => 'xsd:string' ),
                    array('return' => 'xsd:Array'),
                    $ns,'','','',"Size:Nombre(64), correo(255), password(32), dni(8)");

function signup($nombre,$correo,$clave,$dni){
  $usuario= new Usuario();
  $error= new Error();
  if ($sms = $error->validar($correo,$dni)){
   return $sms;
  }
  $usuario->crear($nombre,md5($clave),$correo,$dni);
	 //return "Se ha registrado a $nombre con correo $correo";
	 return $usuario->mostrar($correo);
}

//Metodo 2
$servicio->register("login",
                    array('correo' => 'xsd:string','password' => 'xsd:string' ),
                    array('return' => 'xsd:Array'),
                    $ns,'','','',"");

function login($correo,$clave){
  $usuario= new Usuario();
  $error= new Error();
  if ($sms = $error->validarLogeo($correo,md5($clave))){
   return $sms;
  }
  $usuario->logear($correo,md5($clave));
	 //return "Usuario en linea!";
	 return $usuario->mostrar($correo);
}

//Metodo 3
$servicio->register("edit",
                    array('correo' => 'xsd:string','nombre' => 'xsd:string','telefono' => 'xsd:string','direccion' => 'xsd:string','id' => 'xsd:int'),
                    array('return' => 'xsd:Array'),
                    $ns,'','','',"");

function edit($correo,$nombre,$telefono,$direccion,$id){
  $usuario= new Usuario();
  $error= new Error();
  if ($sms = $error->validarCambioCorreo($correo,$id)){
   return $sms;
  }
  $usuario->editar($correo,$nombre,$telefono,$direccion,$id);
    //return "Usuario actualizado!";
    return $usuario->mostrar($correo);
}

//$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
//$servicio->service($HTTP_RAW_POST_DATA);

 $servicio->service(file_get_contents("php://input"));
?>
