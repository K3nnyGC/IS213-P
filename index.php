<?php
setlocale(LC_TIME, "es_ES.utf8");
date_default_timezone_set('America/Lima');
session_start(['cookie_lifetime' => 86400,]);
$pagina="paginas/homebasic.php";
include_once("layouts/home.php");
?>