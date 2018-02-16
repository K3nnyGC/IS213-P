<?php
setlocale(LC_TIME, "es_ES.utf8");
date_default_timezone_set('America/Lima');
session_start(['cookie_lifetime' => 86400,]);

$tarjeta=$_POST['tarjeta'];
$monto=$_POST['monto'];


//////////////////////
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://vissa.herokuapp.com/tarjeta/pago",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "PUT",
  CURLOPT_POSTFIELDS => "{\n\"tarjeta\" : \"$tarjeta\",\n\"monto\" : $monto\n}",
  CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache",
    "content-type: application/json",
    "postman-token: b5dd57e4-781a-caac-5548-32ea4a5ee206"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);
///////////////////////////////////////
$obj=json_decode($response);

if (isset($obj->message)){
    $_SESSION['error']=$obj->message;
    $_SESSION['pagina']=7;
} else {
    $_SESSION['ok']="Pago exitoso, su banco reporta un saldo de: " .$obj->saldo;
    $_SESSION['pagina']=6;
}

//var_dump($obj);
//var_dump($_POST)

header("Location:https://php1-kennygonzales.c9users.io");

?>