<?php
require '../includes/funciones.php';
include '../includes/conexion.php';
session_start();
$idusuario=$_POST['iduser'];
$tipodoc=$_POST['tipodoc'];
$tiporol=$_POST['tiporol'];

$numero2=$_POST['numero2'];

$nombre=$_POST['nombre'];
$paterno=$_POST['paterno'];
$materno=$_POST['materno'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];
$clave=$_POST['clave'];

	

			$editar="UPDATE usuarios SET numero='$numero2',idtipo='$tipodoc',idrol='$tiporol',clave='$clave',telefono='$telefono',correo='$correo',nombre='$nombre',paterno='$paterno',materno='$materno' where idusuario=$idusuario";
		$consulta="SELECT * from usuarios where  (numero='$numero2' AND idusuario=!$idusuario)  or (correo='$correo'  AND idusuario=!$idusuario)" ;
			
//seleccion que debe ser verdadera 
$resultado=mysqli_query($conexion,$consulta);//ejecuta
$fila=mysqli_num_rows($resultado);
		if ($fila > 0 ) {  //si consigue un dato
				echo '<script language="javascript">alert("Atencion,ya existe el usuario ");</script>';
				echo '<script language="javascript">location.href="adminusuarios.php"</script>';
						
			# code...
		}else{
			
			
			mysqli_query($conexion,$editar);

			echo '<script language="javascript">alert("usuario modificado");</script>';
			echo '<script language="javascript">location.href="adminusuarios.php"</script>';
		
			

		}
		
		



?>