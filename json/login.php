<?php 
include "../includes/conexion.php";
$json=array();
if (isset($_GET["clave"]) && isset($_GET["tipo"]) && isset($_GET["numero"])) {
		$numero=$_GET["clave"];
		$clave=$_GET["tipo"];
		$tipo=$_GET["numero"];

$consulta= "select * from usuarios where  numero='{$numero}' and clave='{$clave}' and idtipo='{$tipo}'";
		$resultado = mysqli_query($conexion,$resultado);

		if ($consulta) {
			# code...

			if ($reg=mysqli_fetch_array($resultado)) {
				$json['conductores'][]=$req;
				# code...

			}
			mysli_close($conexion);
			echo json_encode($json);
		}
}








 ?>