<?php
require '../includes/funciones.php';
include '../includes/conexion.php';
session_start();
$tipodoc=$_POST['tipodoc'];
$tiporol=$_POST['tiporol'];
$numero2=$_POST['numero2'];
$nombre=$_POST['nombre'];
$paterno=$_POST['paterno'];
$materno=$_POST['materno'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];
$clave=$_POST['clave'];

			$registro="INSERT INTO usuarios (numero,idtipo,idrol,clave,telefono,correo,nombre,paterno,materno)
		VALUES('$numero2','$tipodoc','$tiporol','$clave','$telefono','$correo','$nombre','$paterno','$materno');";
		$consulta="select * from usuarios where  numero='$numero2'  or correo='$correo'" ;
		

//seleccion que debe ser verdadera 
$resultado=mysqli_query($conexion,$consulta);//ejecuta
$fila=mysqli_num_rows($resultado);
		if ($fila > 0 ) {  //si consigue un dato
				echo '<script language="javascript">alert("Atencion,ya existe el usuario ");</script>';
				echo '<script language="javascript">location.href="adminusuarios.php"</script>';
						
			# code...
		}else{
			
			
			mysqli_query($conexion,$registro);

			echo '<script language="javascript">alert("usuario registrado");</script>';
			echo '<script language="javascript">location.href="adminusuarios.php"</script>';
		
			

		}




?>