<?php
session_start();

require '../includes/funciones.php';
include "../includes/conexion.php";
if (!isset($_SESSION['usuario'])) {
 	header("location:intranet.php");
}

	$id=$_REQUEST['id'];
	$query="DELETE FROM noticia WHERE idnot='$id' ";
	$resultado=$conexion->query($query);

	if ($resultado) {
		header("location:adminoticia.php");
	}else{
		echo "insercion no exitosa";
	}
?>
