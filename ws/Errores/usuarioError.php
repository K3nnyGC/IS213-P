<?php
    class Error extends BD {
        public function validarDNI($correo,$dni){
            $db = $this->iniciar();
            $query = "SELECT * FROM t_usuario WHERE co_dni='$dni'";
	        $result = $db->query($query); 
	        if ($line = $result->fetch_assoc()){
	            return new soap_fault('-1', 'DNI', 'Este DNI ya esta registrado !','');
	        } else {
	            return false;
	        }
        }
        public function validarCorreo($correo,$dni){
            $db = $this->iniciar();
            $query = "SELECT * FROM t_usuario WHERE tx_email='$correo'";
	        $result = $db->query($query); 
	        if ($line = $result->fetch_assoc()){
	            return new soap_fault('-1', 'CORREO', 'Este Correo ya esta registrado !','');
	        } else {
	            return false;
	        }
        }
        
        public function validar($correo,$dni){
            if ($sms = $this->validarDNI($correo,$dni)){
                return $sms;
            };
            if ($sms = $this->validarCorreo($correo,$dni)){
                return $sms;
            };
            
        }
        public function validarExistencia($correo){
            $db = $this->iniciar();
            $query = "SELECT * FROM t_usuario WHERE tx_email='$correo'";
	        $result = $db->query($query); 
	        if ($line = $result->fetch_assoc()){
	            return false;
	        } else {
	            return new soap_fault('-1', 'CORREO', "Este Correo no esta registrado $correo !",'');
	        }
            
        }
        
        public function validarClave($correo,$clave){
            $db = $this->iniciar();
            $query = "SELECT * FROM t_usuario WHERE tx_email='$correo' AND co_password='$clave'";
	        $result = $db->query($query); 
	        if ($line = $result->fetch_assoc()){
	            return false;
	        } else {
	            return new soap_fault('-1', 'CLAVE', 'Clave errada!','');
	        }
            
        }
        public function validarLogeo($correo,$clave){
            if ($sms = $this->validarExistencia($correo)){
                return $sms;
            };
            if ($sms = $this->validarClave($correo,$clave)){
                return $sms;
            };
            
        }
    }
?>