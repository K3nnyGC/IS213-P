<?php

setlocale(LC_TIME, "es_ES.utf8");
date_default_timezone_set('America/Lima');
session_start(['cookie_lifetime' => 86400,]);


//$nombre=$_POST['nombre'];
//$correo=$_POST['correo'];
//$password=$_POST['password'];
//$dni=$_POST['dni'];

$id_user=$_SESSION['usuario']['id_user'];


include_once('lib/nusoap.php');
include_once('Entidades/BD.php');
$cliente = new nusoap_client("https://php1-kennygonzales.c9users.io/ws/academico.php",false);

$parametros = array('id_user' => $id_user);

$respuesta = $cliente->call("getHorarioPorUsuario",$parametros);

if (isset($respuesta['faultstring'])){
    $_SESSION['error']=$respuesta['faultstring'];
    $_SESSION['pagina']=5;
} else {
    
    $fin=[];
    $al=[ 'nombre' => $respuesta[0]['no_alumno'],
      'dias' => [
                ['-','-','-','-','-','-','-','-','-','-','-','-','-'],
                ['-','-','-','-','-','-','-','-','-','-','-','-','-'],
                ['-','-','-','-','-','-','-','-','-','-','-','-','-'],
                ['-','-','-','-','-','-','-','-','-','-','-','-','-'],
                ['-','-','-','-','-','-','-','-','-','-','-','-','-'],
                ['-','-','-','-','-','-','-','-','-','-','-','-','-'],
                ['-','-','-','-','-','-','-','-','-','-','-','-','-']
            ]
        ];
    for($i=0;$i<count($respuesta);$i++){
        if($respuesta[$i]['no_alumno'] != $al['nombre']){
            $fin[]=$al;
            $al=[ 'nombre' => $respuesta[$i]['no_alumno'],
            'dias' => [
                    ['-','-','-','-','-','-','-','-','-','-','-','-','-'],
                    ['-','-','-','-','-','-','-','-','-','-','-','-','-'],
                    ['-','-','-','-','-','-','-','-','-','-','-','-','-'],
                    ['-','-','-','-','-','-','-','-','-','-','-','-','-'],
                    ['-','-','-','-','-','-','-','-','-','-','-','-','-'],
                    ['-','-','-','-','-','-','-','-','-','-','-','-','-'],
                    ['-','-','-','-','-','-','-','-','-','-','-','-','-']
                ]
            ];
            $al['dias'][ $respuesta[$i]['id_dia']-1 ][ $respuesta[$i]['id_hora']-8  ] = $respuesta[$i]['no_curso'];
        } else {
        $al['dias'][ $respuesta[$i]['id_dia']-1 ][ $respuesta[$i]['id_hora']-8  ] = $respuesta[$i]['no_curso'];
        }
    }
    $fin[]=$al;
}
$_SESSION['horario']=$fin;
//var_dump($fin);

header("Location:https://php1-kennygonzales.c9users.io");

//var_dump("$nombre $correo");
//var_dump($_POST);

?>