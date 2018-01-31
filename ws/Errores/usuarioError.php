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
    }
?>