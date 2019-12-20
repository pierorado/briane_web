<?php
require '../includes/funciones.php';
include "../includes/conexion.php";

if (isset($_GET)) {
	$idnot=0;
	$foto='';
	$idnot=$_GET['id_not'];
	$foto=$_GET['foto'];
	$sql_delete=mysqli_query($conexion,"DELETE FROM noticia WHERE id_not='$idnot'");

	if ($sql_delete) {
	   	unlink('../img/'.$foto);
	   	echo "<script>alert('Eliminado correctamente');window.location='adminoticia.php';</script>";
	   }   

}



  ?>