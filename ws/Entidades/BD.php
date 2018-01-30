<?php
class BD {
    
    public function iniciar(){
        $servername = getenv('IP');
        $username = getenv('C9_USER');
        $password = "";
        $database = "Intranet";
        $dbport = 3306;
        return new mysqli($servername, $username, $password, $database, $dbport); 
    }
    
}

include_once("usuarios.php");

?>