<?php  
require '../../includes/funciones.php';
include '../../includes/conexion.php';
session_start();

if (empty($_GET['id_ht'])) 
{
	header('Location: pg_history.php');
}
$idht = $_GET['id_ht'];

$query="SELECT * FROM history WHERE id_ht = $idht";

$consult= mysqli_query($conexion,$query);
$resul_consult = mysqli_num_rows($consult);

if ($resul_consult == 0) {
	header('Location: pg_history.php');
}else{
	while ($data = mysqli_fetch_array($consult)) {
		$idht = $data['id_ht'];
		$año = $data['año'];
		$descripcion = $data['descripcion'];
		

	}
}




?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>AD Editar Historia</title>
	<meta name="viewport"  content="width=device-width,user-scalable=no,initial-scale=1,maximum-scale=1.0,minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../../css/estilosp.css">
	<link href="https://fonts.googleapis.com/css?family=Coda" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../../fontawesome-free-5.0.13/web-fonts-with-css/css/fontawesome-all.min.css">
	<link rel="stylesheet" type="text/css" href="../../assets/bootstrap/css/bootstrap.min.css">
	<link rel="shortcut icon" type="image/x-icon" href="../../img/ico_briane.ico">
</head>
<header>
	<nav id="menu1">


			<div id="toggle-menu">
				<img class="logo2" src="../../img/logo02.png">

				<label for="tm" ><span class="drop-icon">▾</span></label>

			</div>
			<input type="checkbox" id="tm">
			<ul class="main-menu clearfix">
				<div class="logo22">
					<img  src="../../img/logo02.png">
				</div>
				<li ><a href="../../submenu/panel.php">Panel</a></li>
				<?php
				if ($_SESSION['idrol']== 1) {
					?>
					<li><a href="adminoticia.php">Agregar Noticias</a></li>
					<li><a href="adminofertas.php">Agregar ofertas</a></li>
					<li><a href="adminusuarios.php">Usuarios</a></li>
					<li class="active2"><a href="#">Paginas
					<span class="drop-icon">▾</span>
 					<label title="Toggle Drop-down" class="drop-icon" for="sm2">▾</label>
 					</a>
						<input type="checkbox" id="sm2">
						<ul class="sub-menu">
							<li><a href="pg_history.php">Historia</a></li>
						</ul>
					</li>
				<?php }else if($_SESSION['idrol']== 3){?>
					<li><a href="adminoticia.php">Agregar Noticias</a></li>
				<?php }?>
				<li><a href="adminprofile.php">Perfil</a></li>
				<li><a href="cerrar.php">Cerrar Sesion</a></li>

			</ul>

		</nav> 
</header>
<body>
<div class="informacion">
<form method="post" class="form-control" enctype="multipart/form-data" action="">
	<input type="hidden" name="id_ht" value="<?php echo $idht ?>">
	<label for="textfield">Año:</label>
	<input type="text" class="form-control" name="año" id="textfield" value="<?php echo $año ?>"><br>
	<label for="textfield">Imagen :</label><br>
	<label for="fileField"></label><br>
	<input type="file" class="form-control" name="foto" id="img" ><br>
	
	<label for="textfield2">Descripción</label><br>
	<textarea name="descripcion" class="form-control" cols="55" rows="6" id="textfield2"><?php echo $descripcion ?></textarea><br>
	<input type="submit" name="editar" id="button" value="editar" class='btn btn-warning'>
	
<a class="btn btn-primary" href="adminoticia.php" role="button">Cancelar</a>
</form>	

</div>

<script type="text/javascript" src="../../js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="../../js/manta.js"></script>
	
	<script type="text/javascript" src="../../assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

<?php

 if (isset($_POST['editar'])) {

 		$idht = $_POST['id_ht'];
		$año = $_POST['año'];
		$descripcion = $_POST['descripcion'];
		
		
		if (empty($_FILES['foto']['name'])) {
		 		$query_edit=mysqli_query($conexion,"UPDATE history set año ='$año', descripcion = '$descripcion' WHERE id_ht='$idht'");
		 		echo " la oferta se modifico correctamente ,Refrescar ";


		 	}else{ 	
 	
		 	$query_select = mysqli_query($conexion,"SELECT foto from history WHERE id_ht='$idht'");
		 	while ($res=mysqli_fetch_array($query_select)) {
		 			unlink('../../img/sec_history/'.$res['foto']);
		 	}

		 	
		 	



			 	$destino='../../img/sec_history/';
			 	$img_nombre = 'img_'.md5(date('d-m-y H:m:s'));
	 			$imghistory = $img_nombre.'.jpg';
	 			$src=$destino.$imghistory;
			 	copy($_FILES['foto']['tmp_name'],$src);

			 	$query_edit=mysqli_query($conexion,"UPDATE history set año ='$año', descripcion = '$descripcion',foto = '$imghistory' WHERE id_ht='$idht'");
			 	if ($query_edit) {
			 	 	 echo " la oferta se modifico correctamente ,Refrescar ";
			 	 }else{
			 	 	echo "Error no se modifico , verifique que los campos no contengan ('') ";
			 	 }


			 	 }
 	 	
 }
?>