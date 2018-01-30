<?php

class Usuario extends BD {
    public function crear ($nombre,$clave,$correo,$dni){
        $db = $this->iniciar();
        $query = "INSERT INTO t_usuario (id_user, no_user, co_password, tx_email, co_dni) VALUES ('','$nombre', '$clave','$correo','$dni')";
	    $result = $db->query($query);    
    }
     
}

?>