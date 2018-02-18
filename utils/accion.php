<?php
setlocale(LC_TIME, "es_ES.utf8");
date_default_timezone_set('America/Lima');
session_start(['cookie_lifetime' => 86400,]);

$salir = isset($_POST['salir']) ? true: false;

if ($salir) {
    unset($_SESSION['usuario']);
    $_SESSION['pagina']=0;
} else {
    $_SESSION['pagina']=$_POST['pagina'];
}

switch ($_SESSION['pagina']) {
    case 2:
        header("Location:https://php1-kennygonzales.c9users.io/ws/clienteNoticia.php"); 
        break;
    case 4:
        header("Location:https://php1-kennygonzales.c9users.io/ws/clienteNotas.php"); 
        break;
    case 6:
        header("Location:https://php1-kennygonzales.c9users.io/ws/clienteDeudas.php"); 
        break;
    case 7:
        header("Location:https://php1-kennygonzales.c9users.io/ws/clienteDeudas.php"); 
        break;
    case 8:
        header("Location:https://php1-kennygonzales.c9users.io/ws/clienteConsultas.php"); 
        break;
    default:
        header("Location:https://php1-kennygonzales.c9users.io"); 
        break;
}


?>