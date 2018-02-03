<?php
setlocale(LC_TIME, "es_ES.utf8");
date_default_timezone_set('America/Lima');
session_start(['cookie_lifetime' => 86400,]);

$salir = isset($_POST['salir']) ? $_POST['pagina'] : 1;

if ($salir) {
    unset($_SESSION['usuario']);
    $_SESSION['pagina']=0;
}

header("Location:https://php1-kennygonzales.c9users.io"); 
?>