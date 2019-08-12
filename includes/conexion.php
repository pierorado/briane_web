<?php
   $host="localhost";
	$usuario1="root";
	$clave="";
	$base="briane";

	 $conexion=new mysqli($host,$usuario1,$clave,$base); 
	

     if ($conexion->connect_errno) 
     {
 	    die("fallo de la conexion");
 	 }

 	 if (!$conexion->set_charset("utf8")) {
    printf("Error cargando el conjunto de caracteres utf8: %s\n", $mysqli->error);
    
    exit();
} else {
    //printf("Conjunto de caracteres actual: %s\n", $mysqli->character_set_name());
}
?>