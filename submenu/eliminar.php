<?php
session_start();

require '../includes/funciones.php';
include "../includes/conexion.php";
if (!isset($_SESSION['usuario'])) {
 	header("location:intranet.php");
}

	if ($id=$_REQUEST['id']) {
			$query="DELETE FROM noticia WHERE id_not='$id' ";
		$resultado=$conexion->query($query);

		if ($resultado) {
			header("location:adminoticia.php");
		}else{
			echo "insercion no exitosa";
		}
	}else if ($id=$_REQUEST['id_of']) {
			$query="DELETE FROM ofertas WHERE id_ofertas='$id' ";
		$resultado=$conexion->query($query);

		if ($resultado) {
			header("location:adminofertas.php");
		}else{
			echo "insercion no exitosa";
		}
	}

	
	
?>
