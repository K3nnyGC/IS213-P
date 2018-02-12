<?php

setlocale(LC_TIME, "es_ES.utf8");
date_default_timezone_set('America/Lima');
session_start(['cookie_lifetime' => 86400,]);

$url = "http://clarolyn-001-site1.dtempurl.com/Calificaciones.svc?wsdl";
try {
 $client = new SoapClient($url, [ "trace" => 1 ] );
 $result = $client->ListaCalificaciones( [ "padre" => 9, "licenseKey" => "0" ] );
 //var_dump($result->ListaCalificacionesResult->Calificacion);
} catch ( SoapFault $e ) {
 //echo $e->getMessage();
}

if (count($result->ListaCalificacionesResult->Calificacion)>0){
    $obj=$result->ListaCalificacionesResult->Calificacion;
    $array=[];
    for ($i=0;$i<count($obj);$i++){
        if (isset($array[$obj[$i]->Nombre])){
            $array[$obj[$i]->Nombre][]= ['curso' => $obj[$i]->Curso,'nota' => $obj[$i]->Nota];
        } else {
            $array[$obj[$i]->Nombre]['nombre']=$obj[$i]->Nombre;
            $array[$obj[$i]->Nombre][]=['curso' => $obj[$i]->Curso,'nota' => $obj[$i]->Nota];
        }
    }
    $array2=[];
    foreach($array as $key => $value){
        $array2[] = $array[$key];
    }
    
    $_SESSION['notas']=$array2;
    $_SESSION['pagina']=4;
} else {
    $_SESSION['notas']=[];
    $_SESSION['pagina']=4;
}

//var_dump($_SESSION['notas']);
header("Location:https://php1-kennygonzales.c9users.io");
?>