<?php 
	
require '../includes/funciones.php';
include '../includes/conexion.php';
$idusuario=$_REQUEST['idusuario'];
$numero=$_REQUEST['profile_id_numero'];
$queryDeleteUser="DELETE FROM `usuarios` WHERE `idusuario` = '$idusuario'";
$queryDeleteProfile="DELETE FROM `profile` WHERE `id_numero` = '$numero'";
$insertuno=mysqli_query($conexion,$queryDeleteUser);
			if ($insertuno==true) {
				
				$insertdos=mysqli_query($conexion,$queryDeleteProfile);
			}
			if($insertdos==true){
				header("Location:adminusuarios.php");
			}else{
				echo "error no se elimino";
			}


 ?>