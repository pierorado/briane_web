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
$foto = $_FILES['foto'];
$clave=$_POST['clave'];
$nombre_foto = $foto['name'];
 		$type = $foto['type'];
 		$url_temp  = $foto['tmp_name'];
 		$imgProfile = 'img_profile.png';
 		if ($nombre_foto != '') {
 			$destino = '../img/profile/';
 			$img_nombre = 'img_'.md5(date('d-m-y H:m:s'));
 			$imgProfile = $nombre.'.jpg';
 			$src  = $destino.$imgProfile;

 		}
			$registro="INSERT INTO profile(id_numero,nombre,paterno,materno,telefono,correo,imagen)VALUES('$numero2','$nombre','$paterno','$materno','$telefono','$correo','$imgProfile')";
			$registro2="INSERT INTO usuarios(idtipo,idrol,clave,numero)VALUES('$tipodoc','$tiporol','$clave','$numero2')";
		$consulta="select * from usuarios where  numero='$numero2'" ;
		

//seleccion que debe ser verdadera 
$resultado=mysqli_query($conexion,$consulta);//ejecuta
$fila=mysqli_num_rows($resultado);
		if ($fila > 0 ) {  //si consigue un dato
				echo '<script language="javascript">alert("Atencion,ya existe el usuario ");</script>';
				echo '<script language="javascript">location.href="adminusuarios.php"</script>';
						
			# code...
		}else{
			
			
			$insertuno=mysqli_query($conexion,$registro);
			if ($insertuno==true) {
				move_uploaded_file($url_temp,$src);
				$insertdos=mysqli_query($conexion,$registro2);
			}
			if($insertdos==true){

			}
			
			echo '<script language="javascript">alert("usuario registrado");</script>';
			echo '<script language="javascript">location.href="adminusuarios.php"</script>';
		
			

		}




?>