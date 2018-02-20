<?php

setlocale(LC_TIME, "es_ES.utf8");
date_default_timezone_set('America/Lima');
session_start(['cookie_lifetime' => 86400,]);
$usuarioActual=$_SESSION['usuario']['id_user'];
$url = "http://evelynross-001-site1.htempurl.com/ServicioVarios.svc?wsdl";
try {
 $client = new SoapClient($url, [ "trace" => 1 ] );
 $result = $client->getDeudasPorUsuario( ['idUsuario'=> $usuarioActual] );
} catch ( SoapFault $e ) {
 $_SESSION['error'] = $e->getMessage();
}

$array=[];
$resultadoA=$result->getDeudasPorUsuarioResult->DeudaBE;
if (is_array($resultadoA)){
} else {
    $resultadoA = is_null($resultadoA) ? []:[$resultadoA];
    //$resultadoA=[$resultadoA];
}

//var_dump($resultadoA);
for ($i=0;$i<count($resultadoA);$i++){
    $array[]=['idDeuda'=>$resultadoA[$i]->idDeuda,
        'concepto'=>$resultadoA[$i]->concepto,
        'monto'=>$resultadoA[$i]->monto,
        'pagado'=>$resultadoA[$i]->pagado];
}

//var_dump($array);
$_SESSION['deudas']=$array;
//var_dump($_SESSION);
header("Location:https://php1-kennygonzales.c9users.io");
?>