<?php

include_once('lib/nusoap.php');
include_once('Entidades/BD.php');
include_once('Errores/usuarioError.php');

$servicio= new soap_server();

$ns="urn:academicowsdl";
$servicio->configureWSDL("Servicio de Horarios",$ns);
$servicio->schemaTargetNamespace = $ns;

//Metodo 1
$servicio->register("getHorarioPorUsuario",
                    array('id_user' => 'xsd:int'),
                    array('return' => 'xsd:Array'),
                    $ns,'','','',"");

function getHorarioPorUsuario($id_user){
    $db = new BD();
    $con= $db->iniciar();
    $query="SELECT u.id_user, a.id_alumno, na.no_alumno, c.id_curso, c.no_curso, h.id_dia, h.id_hora FROM `t_usuario` u, `t_alumnos` a,   `t_horarios` h, `t_asignaturas` s, t_curso c, t_nombresAlumos na WHERE 
u.id_user = a.id_user and
a.id_alumno = s.id_alumno and
s.id_curso = h.id_curso and
c.id_curso = s.id_curso and
na.id_alumno = a.id_alumno and
u.id_user = $id_user 
order by a.id_alumno, c.id_curso, id_hora";
    $result = $con->query($query);
    if ($result==false){ throw new Exception("Revisa la consulta!");
        return new soap_fault('500', 'Error', "Error interno",'');
		}
	
    if ($line = $result->fetch_array(MYSQLI_ASSOC)) {
        $array=[];
        $array[]=$line;
    	while ($line = $result->fetch_array(MYSQLI_ASSOC)) {
	    	$array[]=$line;
	    	}
	    return $array;
    } else {
        return new soap_fault('500', 'Error', "No se ha registrado aun los horarios",'');
    }
    
}



//$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
//$servicio->service($HTTP_RAW_POST_DATA);

 $servicio->service(file_get_contents("php://input"));
?>
