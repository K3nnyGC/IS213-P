<?php

setlocale(LC_TIME, "es_ES.utf8");
date_default_timezone_set('America/Lima');
session_start(['cookie_lifetime' => 86400,]);

$usuarioActual=$_SESSION['usuario']['id_user'];
$url = "http://evelynross-001-site1.htempurl.com/ServicioVarios.svc?wsdl";

try {
 $client = new SoapClient($url, [ "trace" => 1 ] );
 $result = $client->getConsultasPorUsuario( ['idUsuario'=> $usuarioActual] );
 //var_dump($result->ListaCalificacionesResult->Calificacion);
} catch ( SoapFault $e ) {
 $_SESSION['error'] = $e->getMessage();
}

$array=[];
$resultadoA=$result->getConsultasPorUsuarioResult->ContactoBE;
if (is_array($resultadoA)){
} else {
    $resultadoA=[$resultadoA];
}

//var_dump($resultadoA);
for ($i=0;$i<count($resultadoA);$i++){
    $array[]=['fecha'=>$resultadoA[$i]->fechaCreacion,
        'motivo'=>$resultadoA[$i]->asunto,
        'asunto'=>$resultadoA[$i]->descripcion];
}

//var_dump($array);
$_SESSION['consultas']=$array;
header("Location:https://php1-kennygonzales.c9users.io");
?>