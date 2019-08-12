<?php 
	
require '../includes/funciones.php';
include '../includes/conexion.php';
$idusuario=$_REQUEST['idusuario'];
$query="DELETE FROM `usuarios` WHERE `idusuario` = '$idusuario'";
$resultado=mysqli_query($conexion,$query);
if ($resultado) {
	header("Location:adminusuarios.php");
}else{
	echo "error no se elimino";
}



 ?>