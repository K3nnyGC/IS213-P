<?php
setlocale(LC_TIME, "es_ES.utf8");
date_default_timezone_set('America/Lima');
session_start(['cookie_lifetime' => 86400,]);

switch ($_SESSION['pagina']) {
    case 3:
        $pagina="paginas/perfil.php";
        include_once("layouts/principal.php");
        break;
    default:
        $pagina="paginas/homebasic.php";
        include_once("layouts/home.php");
        break;
}

//var_dump($_SESSION);

?>