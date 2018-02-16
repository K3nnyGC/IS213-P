<?php

setlocale(LC_TIME, "es_ES.utf8");
date_default_timezone_set('America/Lima');
session_start(['cookie_lifetime' => 86400,]);

$url = "http://evelynross-001-site1.htempurl.com/ServicioVarios.svc?wsdl";
try {
 $client = new SoapClient($url, [ "trace" => 1 ] );
 $result = $client->createConsulta( [
     'oContactoBE'=>[
         'asunto' => $asunto,
         'descripcion' => $descripcion,
         'fechaCreacion' => $fecha,
         'idItem' => $id_item,
         'idUsuario'=> $usuario
         ]
     ] );
 //var_dump($result->ListaCalificacionesResult->Calificacion);
} catch ( SoapFault $e ) {
 //echo $e->getMessage();
}

$array=[];
$resultadoA=$result->getConsultasResult->ContactoBE;
for ($i=0;$i<count($resultadoA);$i++){
    $array[]=['fecha'=>$resultadoA[$i]->fechaCreacion,
        'motivo'=>$resultadoA[$i]->asunto,
        'asunto'=>$resultadoA[$i]->descripcion];
}

//var_dump($array);
$_SESSION['consultas']=$array;
header("Location:https://php1-kennygonzales.c9users.io");
?>