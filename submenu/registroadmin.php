<?php
require '../includes/funciones.php';
include '../includes/conexion.php';
session_start();
$tipo=$_POST['tipo'];
$numero2=$_POST['numero2'];
$nombre=$_POST['nombre'];
$paterno=$_POST['paterno'];
$materno=$_POST['materno'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];
$clave=$_POST['clave'];
$rclave=$_POST['Rclave'];


			$registro="INSERT INTO usuarios (numero,idtipo,idrol,clave,telefono,correo,nombre,paterno,materno)
		VALUES('$numero2','$tipo','2','$clave','$telefono','$correo','$nombre','$paterno','$materno');";
		$consulta="select * from usuarios where  numero='$numero2'  or correo='$correo'" ;
			


//seleccion que debe ser verdadera 
$resultado=mysqli_query($conexion,$consulta);//ejecuta
$fila=mysqli_num_rows($resultado);
if ($clave==$rclave) {
		if ($fila > 0 ) {  //si consigue un dato
				echo '<script language="javascript">alert("Atencion,ya existe el usuario ");</script>';
				echo '<script language="javascript">location.href="intraRegister.php"</script>';
				
				
				

			
			
			# code...
		}else{
			
			
			mysqli_query($conexion,$registro);
			echo '<script language="javascript">alert("usuario registrado");</script>';
			echo '<script language="javascript">location.href="intraRegister.php"</script>';
			

		}

}else{
	echo '<script language="javascript">alert("las contraseñas no coinciden");</script>';
	echo '<script language="javascript">location.href="intraRegister.php"</script>';
	
}


?>