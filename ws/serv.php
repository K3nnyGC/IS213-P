<?php
 
// incluimos la libreria ó toolkit nusoap que descargamos previamente
require_once('lib/nusoap.php');

// Vamos a crear la instancia del servidor.
$server = new nusoap_server();

$server->configureWSDL('Mi Web Service #1', 'urn:mi_ws1');


// Parametros de entrada
$server->wsdl->addComplexType(  'datos_persona_entrada', 
                                'complexType', 
                                'struct', 
                                'all', 
                                '',
                                array('nombre'   => array('name' => 'nombre','type' => 'xsd:string'),
                                      'email'    => array('name' => 'email','type' => 'xsd:string'),
                                      'telefono' => array('name' => 'telefono','type' => 'xsd:string'),
                                      'ano_nac'  => array('name' => 'ano_nac','type' => 'xsd:int'))
);
// Parametros de entrada 2
$server->wsdl->addComplexType(  'datos_numeros_entrada', 
                                'complexType', 
                                'struct', 
                                'all', 
                                '',
                                array('n1'   => array('name' => 'n1','type' => 'xsd:int'),
                                      'n2'    => array('name' => 'n2','type' => 'xsd:int'))
);
// Parametros de Salida
$server->wsdl->addComplexType(  'datos_persona_salidad', 
                                'complexType', 
                                'struct', 
                                'all', 
                                '',
                                array('mensaje'   => array('name' => 'mensaje','type' => 'xsd:string'))
);

// Parametros de Salida 2
$server->wsdl->addComplexType(  'datos_numeros_salida', 
                                'complexType', 
                                'struct', 
                                'all', 
                                '',
                                array('mensaje'   => array('name' => 'mensaje','type' => 'xsd:int'))
);

$server->register(  'calculo_suma', // nombre del metodo o funcion
                    array('datos_numeros_entrada' => 'tns:datos_numeros_entrada'), // parametros de entrada
                    array('return' => 'tns:datos_numeros_salida'), // parametros de salida
                    'urn:mi_ws1', // namespace
                    'urn:hellowsdl2#calculo_suma', // soapaction debe ir asociado al nombre del metodo
                    'rpc', // style
                    'encoded', // use
                    'La siguiente funcion recibe 2 numeros y calcula la suma' // documentation
);

$server->register(  'calculo_edad', // nombre del metodo o funcion
                    array('datos_persona_entrada' => 'tns:datos_persona_entrada'), // parametros de entrada
                    array('return' => 'tns:datos_persona_salidad'), // parametros de salida
                    'urn:mi_ws1', // namespace
                    'urn:hellowsdl2#calculo_edad', // soapaction debe ir asociado al nombre del metodo
                    'rpc', // style
                    'encoded', // use
                    'La siguiente funcion recibe los parametros de la persona y calcula la Edad' // documentation
);

function calculo_edad($datos) {
    $edad_actual = date('Y') - $datos['ano_nac'];
    $msg = 'Hola, ' . $datos['nombre'] . '. Hemos procesado la siguiente informacion ' . $datos['email'] . ', telefono'. $datos['telefono'].' y su Edad actual es: ' . $edad_actual . '.'; 
    return array('mensaje' => $msg);
}


function calculo_suma($datos) {
    $ssuma = $datos['n1']+$datos['n2'];
    
    return array('mensaje' => $ssuma);
}

$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
$server->service($HTTP_RAW_POST_DATA);

 
?>