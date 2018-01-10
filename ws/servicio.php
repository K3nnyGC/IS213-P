<?php

include_once('lib/nusoap.php');
$servicio= new soap_server();

$ns="urn:serviciowsdl";
$servicio->configureWSDL("ServicioCartas",$ns);
$servicio->schemaTargetNamespace = $ns;

$servicio->register("f1", array('num1' => 'xsd:int' ), array('return' => 'xsd:int'),$ns);

function f1($num1){
	return $num1*$num1;
}

//$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
//$servicio->service($HTTP_RAW_POST_DATA);

 $servicio->service(file_get_contents("php://input"));
?>