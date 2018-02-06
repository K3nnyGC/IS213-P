<?php

class Usuario extends BD {
    public function crear ($nombre,$clave,$correo,$dni){
        $db = $this->iniciar();
        $query = "INSERT INTO t_usuario (id_user, no_user, co_password, tx_email, co_dni) VALUES ('','$nombre', '$clave','$correo','$dni')";
	    $result = $db->query($query);    
    }
    
    public function mostrar ($correo){
        $db = $this->iniciar();
        $query = "SELECT * FROM t_usuario WHERE tx_email='$correo'";
	    $result = $db->query($query);
	    return $result->fetch_array(MYSQLI_ASSOC);
    }
    
    public function logear ($correo,$clave){
        $db = $this->iniciar();
        $query = "SELECT * FROM t_usuario WHERE tx_email='$correo' AND co_password='$clave'";
	    $result = $db->query($query);
	    $_SESSION['usuario'] = $result->fetch_array(MYSQLI_ASSOC);
	    $_SESSION['pagina']=3;
    }
    
    public function editar($correo,$nombre,$telefono,$direccion){
        $db = $this->iniciar();
        $query="UPDATE  t_usuario SET tx_telefono = '$telefono', no_user = '$nombre', tx_direccion = '$direccion' WHERE tx_email='$correo'";
	    $result = $db->query($query);    
    }
     
}

?>