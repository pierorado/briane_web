<?php

 require '../includes/funciones.php';
 include '../includes/conexion.php'; 
$json=array();
if (isset($_GET['profile_id_numero'])&& isset($_GET["clave"])&& isset($_GET['tipo'])) {
	$clave=$_GET['clave'];
	$tipo=$_GET['tipo'];
	$profile_id_numero=$_GET['profile_id_numero'];
	

	$consulta="select u.profile_id_numero,u.clave,p.nombre,p.imagen from usuarios u  INNER JOIN profile p ON u.profile_id_numero=p.id_numero where  profile_id_numero='{$profile_id_numero}' and clave='{$clave}' and idtipo='{$tipo}' and idrol='4'";

	$resultado=mysqli_query($conexion,$consulta);
	if ($consulta) {
		if ($reg=mysqli_fetch_array($resultado)) {//cargar
			$json['conductores'][]=$reg;//recuperando el resultado
		}
		
		mysqli_close($conexion);
		echo json_encode($json);
	}
	else{
		$results['profile_id_numero']='';
		$results['tipo']='';
		$results["clave"]='';
		$json['conductores'][]=$results;
		echo json_encode($json);
	}
}
else{
		$results['profile_id_numero']='';
		$results['tipo']='';
		$results["clave"]='';
		$json['conductores'][]=$results;
		echo json_encode($json);
	}

?>