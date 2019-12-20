<?php

session_start();
require '../includes/funciones.php';
include '../includes/conexion.php';

$tipo=$_POST['tipo'];

$numero2=$_POST['numero2'];
$nombre=$_POST['nombre'];
$paterno=$_POST['paterno'];
$materno=$_POST['materno'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];
$clave=$_POST['clave'];
$rclave=$_POST['Rclave'];
$mensaje =null;
if ($tipo=='') {
	$mensaje="<div class='alert alert-danger' role='alert'>Seleccione el tipo de documeto</div>";

}else if($numero2==''){
			$mensaje="<div class='alert alert-danger' role='alert'>Introduce los numeros</div>";

}else if($nombre==''){
			$mensaje="<div class='alert alert-danger' role='alert'>Introduce tu nombre</div>";
}else if($paterno==''){
			$mensaje="<div class='alert alert-danger' role='alert'>Introduce tu Apellido Paterno</div>";
}else if($materno==''){
			$mensaje="<div class='alert alert-danger' role='alert'>Introduce tu Apellido Materno</div>";
}else if($telefono==''){
			$mensaje="<div class='alert alert-danger' role='alert'>Introduce tu telefono</div>";
}else if($correo==''){
			$mensaje="<div class='alert alert-danger' role='alert'>Introduce tu correo</div>";
}else if($clave==''){
			$mensaje="<div class='alert alert-danger' role='alert'>Introduce tu contraseña</div>";
		}else if(!preg_match('/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])\w{8,}$/', $clave)){
			$mensaje="<div class='alert alert-danger' role='alert'>La contraseña debe tener entre 8 y 12 caracteres, al menos un dígito, al menos una minúscula.</div>";
		}else{ 
			$registro="INSERT INTO usuarios (numero,idtipo,idrol,clave,telefono,correo,nombre,paterno,materno)
		VALUES('$numero2','$tipo','2','$clave','$telefono','$correo','$nombre','$paterno','$materno');";
		$consulta="select * from usuarios where  numero='$numero2'  or correo='$correo'" ;
			


//seleccion que debe ser verdadera 
$resultado=mysqli_query($conexion,$consulta);//ejecuta
$fila=mysqli_num_rows($resultado);
		if ($clave==$rclave) {
				if ($fila > 0 ) {  //si consigue un dato
						$mensaje="<div class='alert alert-warning' role='alert'>Atencion,ya existe el usuario.</div>";
						
				}else{
					mysqli_query($conexion,$registro);
					$mensaje="<div class='alert alert-success' role='alert'>Se completo el proceso de registro exitosamente.</div>";
					

				}

		}else{
			
				$mensaje="<div class='alert alert-danger' role='alert'>las contraseñas no coinciden</div>";
		}
}
echo $mensaje;
?>