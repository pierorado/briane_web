<?php
session_start();

error_reporting(0);
$inicio=$_SESSION['active'];
if ($inicio==null || $inicio='') {
	header("location:intranet.php");

	die();

}else{
	require '../../includes/funciones.php';
	include "../../includes/conexion.php";
}
?>


<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<title>AD Historia Briane</title>
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
	<label for="textfield">Año</label>
	<input type="text" class="form-control" name="año" id="textfield"><br>
	<label for="textfield">Imagen :</label><br>
	<label for="fileField"></label><br>
	<input type="file" class="form-control" name="foto" id="img" ><br>

	<label for="textfield2">Descripción</label><br>
	<textarea name="descripcion" class="form-control" cols="55" rows="8" id="textfield2"></textarea><br>
	<input type="submit" class='btn btn-primary' name="guardar" id="button" value="Agregar">
	<button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModalScrollable">
  ayuda
</button>

<div class="form-control" style="margin-top: 10px">
<div class="header-table" style="padding: 15px">
		<h4 class="tite">Tabla de Historia</h4>

	</div>
<div class="content table-responsive table-full-width" style="padding: 20px">
<table class="table table-secondary">
	<tr class="table-danger">
		<td scope="col">Año</td>
		<td scope="col">Imagen</td>
		
		<td scope="col">Acciones</td>
	</tr>
	<?php 
	 $ss=mysqli_query($conexion,"SELECT * FROM history ORDER BY id_ht DESC");
	 while ($rr=mysqli_fetch_array($ss)) {
	 	?>
	 	<tr>
	 		<td>
	 			<?php echo $rr['año']; ?>
	 		</td>
	 		<td>
	 			<center>
	 				<img width="50px" height="50px" src="../../img/sec_history/<?php echo $rr['foto']; ?>" >
	 			</center>
	 		</td>
	 		
	 		<td>
	 			<a href='ad_edit_history.php?id_ht=<?php echo $rr['id_ht']; ?>'><button type='button' class='btn btn-warning'>Editar</button></a>
	 			<a href='ad_delete_history.php?id_ht=<?php echo $rr['id_ht'];?>&foto=<?php echo $rr['foto']; ?>'><button type='button' class='btn btn-danger'>eliminar</button></a>
	 		</td>
	 	</tr>
   <?php  } ?>
</table>
</div>
</div>
</form>
</div>

<script type="text/javascript" src="../../js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="../../js/manta.js"></script>
	
	<script type="text/javascript" src="../../assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
<?php

 if (isset($_POST['guardar'])) {
 	
 	if (empty($_POST['año']) || empty($_POST['descripcion']) || empty($_FILES['foto']['name'])) 
 	{
 		echo "<p>Los campos son obligatorios</p>";
 	}else{

 		$año = $_POST['año'];
 		$descripcion = $_POST['descripcion'];
 		

 		$foto = $_FILES['foto'];
 		$nombre_foto = $foto['name'];
 		$type  		= $foto['type'];
 		$url_temp  		= $foto['tmp_name'];
 		$imgHistory = 'img_history.png';

 		if ($nombre_foto != '') {
 			$destino = '../../img/sec_history/';
 			$img_nombre = 'img_'.md5(date('d-m-y H:m:s'));
 			$imgHistory = $img_nombre.'.jpg';
 			$src  = $destino.$imgHistory;
 			
 		}
 		
 		$query_insert = mysqli_query($conexion,"INSERT INTO history(año,descripcion,foto) VALUES ('$año','$descripcion','$imgHistory')");

 		if ($query_insert) {

 			


 			if ($nombre_foto != '') {
 				
 				move_uploaded_file($url_temp,$src);
 				
 			}
 			echo "<p>Noticia insertado correctamente , Refrescar</p>";
 			
 		}else{
 			echo "<p>error al  insertar </p>";
 		}
 	}

 }