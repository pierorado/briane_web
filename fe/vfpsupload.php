<?php
// Pull in the NuSOAP code
include('lib/nusoap.php');
// Error
error_reporting(E_ERROR);
// Create the server instance
$server = new soap_server();
// Initialize WSDL support
$server->configureWSDL('VFPs_Service', 'urn:VFPs_Service');
                // Character encoding
                $server->soap_defencoding = 'ISO-8859-1';
                // ----------------------------------------------------------------------
                //REGISTRAR WS PARA SUBIR ARCHIVOS EN BASE64
                $server->register('VFPs_UploadFile',
                         array('DirFile' => 'xsd:string', 'fileName' => 'xsd:string',	'contentFile' => 'xsd:string'),
                         array('return' =>'xsd:boolean', 'filerpta' =>'xsd:string'),
                         'urn:VFPs_Servicewsdl',
                         'urn:VFPs_Servicewsdl#VFPs_UploadFile',
                         'rpc',
                         'encoded',
                         'Subir archivos'
                );
                // FUNCIONES DEL WS
                
                // SUBIR ARCHIVOS
                function VFPs_UploadFile($DirFile, $fileName, $contentFile) {

                    if (empty($DirFile)) {
                       return array('false', 'No se ha ingresado directorio para subir el archivo.');
	                     exit();
                    }

                    if (empty($fileName)) {
                       return array('false', 'No se ha ingresado nombre del archivo.');
	                     exit();
                    }

                    if (empty($contentFile)) {
                       return array('false', 'No se ha ingresado contenido del archivo.');
	                     exit();
                    }

                    //VALIDAR QUE EXISTA LA CARPETA
                   /* $rutax  = '../' .$DirFile. '/';*/
					$rutax  = '' .$DirFile. '/';
                    if (!file_exists($rutax)) {
                       return array('false', 'No se encuentra el directorio [' .$rutax. '] Verificar!!!');
 	                     exit();
                    }
                    
                    $data     = base64_decode($contentFile);
                    $nombre   = $fileName;
                    $file     = $rutax.$nombre;
                    $numbytes = file_put_contents($file, $data);
                    
                    if ($numbytes == 0) {
                       return array('false', 'Error al escribir el archivo en la carpeta[' .$rutax. '] Verificar!!!');
                       exit();
                    }   
                    
                    return array('true', 'El archivo se guardo con EXITO.');
                } 

                // PARA PHP INSTALADO EN LA NUBE
                $HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
                $server->service($HTTP_RAW_POST_DATA);
                
                //SOLO PHP INSTALADO EN UNA PC LOCAL (WAMP, XAMP, ETC)
                //$server->service(file_get_contents("php://input"));
?>                                                