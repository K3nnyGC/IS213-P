<?php
setlocale(LC_TIME, "es_ES.utf8");
date_default_timezone_set('America/Lima');
session_start(['cookie_lifetime' => 86400,]);

switch ($_SESSION['pagina']) {
    case 2:
        $pagina="paginas/inicio.php";
        include_once("layouts/principal.php");
        break;
    case 3:
        $pagina="paginas/perfil.php";
        include_once("layouts/principal.php");
        break;
    case 4:
        $pagina="paginas/notas.php";
        include_once("layouts/principal.php");
        break;
    case 5:
        $pagina="paginas/horarios.php";
        include_once("layouts/principal.php");
        break;
    case 6:
        $pagina="paginas/pagos.php";
        include_once("layouts/principal.php");
        break;
    case 7:
        $pagina="paginas/deudas.php";
        include_once("layouts/principal.php");
        break;
    case 8:
        $pagina="paginas/consultas.php";
        include_once("layouts/principal.php");
        break;
    default:
        $pagina="paginas/homebasic.php";
        include_once("layouts/home.php");
        break;
}

//var_dump($_SESSION);

?>