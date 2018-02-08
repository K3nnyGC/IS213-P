<?php

setlocale(LC_TIME, "es_ES.utf8");
date_default_timezone_set('America/Lima');
session_start(['cookie_lifetime' => 86400,]);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://myschooldb-001-site1.itempurl.com/Noticias.svc/Noticias");
//curl_setopt($ch, CURLOPT_POST, 1);
//curl_setopt($ch, CURLOPT_POSTFIELDS, POST DATA);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
$obj=json_decode($result);
$array=[];
for ($i=0;$i<count($obj);$i++){
    $arrayT=[
        'titulo' => $obj[$i]->Titulo,
        'imagen' => $obj[$i]->Imagen,
        'contenido' => $obj[$i]->Contenido
        ];
    $array[]=$arrayT;
}

$_SESSION['noticias']=$array;
curl_close($ch);
header("Location:https://php1-kennygonzales.c9users.io");

?>