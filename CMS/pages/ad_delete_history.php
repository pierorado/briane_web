<?php 
require '../../includes/funciones.php';
include "../../includes/conexion.php";

if (isset($_GET)) {
	$idht=0;
	$foto='';
	$idht=$_GET['id_ht'];
	$foto=$_GET['foto'];
	$sql_delete=mysqli_query($conexion,"DELETE FROM history WHERE id_ht='$idht'");

	if ($sql_delete) {
	   	unlink('../../img/sec_history/'.$foto);
	   	echo "<script>alert('Eliminado correctamente');window.location='pg_history.php';</script>";
	   }   

}


 ?>