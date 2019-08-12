<?php

session_start();
$inicio=$_SESSION['active'];
if (!empty($_SESSION['active'])) {
	header('location:panel.php');
}else{
require '../includes/funciones.php';
include '../includes/conexion.php';


$clave=$_POST['clave'];
$tipo=$_POST['tipo'];

$numero2=$_POST['numero2'];

header("Content-Type: text/html; charset=utf-8");
//seleccion que debe ser verdadera 

	$consulta="select * from usuarios where  numero='$numero2' and clave='$clave' and idtipo='$tipo'";

$resultado=mysqli_query($conexion,$consulta);//ejecuta
mysqli_close($conexion);
$fila=mysqli_num_rows($resultado);

if ($fila > 0 ) {  //si consigue un dato
$row=mysqli_fetch_array($resultado);
	$_SESSION['active']=true;		
	$_SESSION['num']=$row['numero'];
	$_SESSION['tipo']=$row['idtipo'];
	$_SESSION['rol']=$row['idrol'];
	$_SESSION['name']=$row['nombre'];
	$_SESSION['contra']=$row['clave'];
	$_SESSION['telef']=$row['telefono'];
	$_SESSION['patern']=$row['paterno'];
	$_SESSION['matern']=$row['materno'];
	$_SESSION['msm']=$row['correo'];
		header('location:panel.php');
		
	
	
	# code...
}else{

	echo '<script language="javascript">alert("Credenciales inválidas");</script>';
	echo '<script language="javascript">location.href="intranet.php"</script>';
	session_destroy();
	
}
}

?>