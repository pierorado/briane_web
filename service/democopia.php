<?php

 require '../includes/funciones.php';
 include '../includes/conexion.php'; 
$json=array();
if (isset($_GET['numero'])&& isset($_GET["clave"])&& isset($_GET['tipo'])) {
	$clave=$_GET['clave'];
	$tipo=$_GET['tipo'];
	$numero=$_GET['numero'];
	

	$consulta="select u.numero,u.clave,p.nombre from usuarios u  INNER JOIN profile p ON u.numero=p.id_numero where  numero='76202977' and clave='PIEROdead1998' and idtipo='1' and idrol='4'";

	$resultado=mysqli_query($conexion,$consulta);
	if ($consulta) {
		if ($reg=mysqli_fetch_array($resultado)) {//cargar
			$json['conductores'][]=$reg;//recuperando el resultado
		}
		mysqli_close($conexion);
		echo json_encode($json);
	}
	else{
		$results['numero']='';
		$results['tipo']='';
		$results["clave"]='';
		$json['conductores'][]=$results;
		echo json_encode($json);
	}
}
else{
		$results['numero']='';
		$results['tipo']='';
		$results["clave"]='';
		$json['conductores'][]=$results;
		echo json_encode($json);
	}

?>