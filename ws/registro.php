<?php

include_once('lib/nusoap.php');
$servicio= new soap_server();

$ns="urn:regsitrowsdl";
$servicio->configureWSDL("ServicioRegistro",$ns);
$servicio->schemaTargetNamespace = $ns;

$servicio->register("signup", array('nombre' => 'xsd:string','correo' => 'xsd:string' ), array('return' => 'xsd:string'),$ns);

function signup($nombre,$correo){
	//Salvar en base de datos
	return "Se ha registrado a $nombre con correo $correo";
}

//$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
//$servicio->service($HTTP_RAW_POST_DATA);

 $servicio->service(file_get_contents("php://input"));
?>