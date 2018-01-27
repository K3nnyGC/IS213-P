<?php

include_once('lib/nusoap.php');
$servicio= new soap_server();

$ns="urn:regsitrowsdl";
$servicio->configureWSDL("ServicioRegistro",$ns);
$servicio->schemaTargetNamespace = $ns;

$servicio->register("signup", array('nombre' => 'xsd:string','correo' => 'xsd:string','password' => 'xsd:string' ), array('return' => 'xsd:string'),$ns);

function signup($nombre,$correo,$clave){
	//pasar a persistencia
	$servername = getenv('IP');
    $username = getenv('C9_USER');
    $password = "";
    $database = "Intranet";
    $dbport = 3306;
    $db = new mysqli($servername, $username, $password, $database, $dbport);
    $query = "INSERT INTO t_usuario (id_user, no_user, co_password, tx_email) VALUES ('','$nombre', '$clave','$correo')";
	$result = $db->query($query);
	//Fin de pasar a persistencia
	return "Se ha registrado a $nombre con correo $correo";
}

//$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
//$servicio->service($HTTP_RAW_POST_DATA);

 $servicio->service(file_get_contents("php://input"));
?>