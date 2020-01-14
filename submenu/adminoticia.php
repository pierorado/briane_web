<?php
session_start();

error_reporting(0);
$inicio=$_SESSION['active'];
if ($inicio==null || $inicio='') {
	header("location:intranet.php");

	die();

}else{
//if ($_SESSION['rol']!= 3) {
 //	header("location:panel.php");
//}
require '../includes/funciones.php';
require "../includes/conexion.php";

}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>noticias |briane</title>
	<meta name="viewport"  content="width=device-width,user-scalable=no,initial-scale=1,maximum-scale=1.0,minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../css/estilosp.css">
	<link href="https://fonts.googleapis.com/css?family=Coda" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../fontawesome-free-5.0.13/web-fonts-with-css/css/fontawesome-all.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.min.css">
	<link rel="shortcut icon" type="image/x-icon" href="../img/ico_briane.ico">
</head>
<body style="background-color: #F8F8F8">
	<header>		 
	 		<nav id="menu1">
	 	
	 		
	 				<div id="toggle-menu">
	 					<img class="logo2" src="../img/logo02.png">
	 					
	 					<label for="tm" ><span class="drop-icon">▾</span></label>
	 				
	 				</div>
	 				<input type="checkbox" id="tm">
	 			<ul class="main-menu clearfix">
	 				<div class="logo22">
	 					<img  src="../img/logo02.png">
	 				</div>
	 				<li ><a href="panel.php">Panel</a></li>
	 				<?php
			if ($_SESSION['rol']== 1) {
			 ?>
			<li class="active2"><a href="adminoticia.php">Agregar Noticias</a></li>
			<li><a href="adminofertas.php">Agregar ofertas</a></li>
			<li><a href="adminusuarios.php">Usuarios</a></li>
			<?php }else if($_SESSION['rol']== 3){?>
					<li><a href="adminoticia.php">Agregar Noticias</a></li>
				<?php }?>
			<li><a href="adminprofile.php">Perfil</a></li>
			<li><a href="cerrar.php">Cerrar Sesion</a></li>
			 		
	 		</ul>
	 	
	  </nav> 
	</header>



	<div class="informacion">
<form method="post" class="form-control" enctype="multipart/form-data" action="">
	<label for="textfield">Titulo de Noticia :</label>
	<input type="text" class="form-control" name="titulo" id="textfield"><br>
	<label for="textfield">Imagen :</label><br>
	<label for="fileField"></label><br>
	<input type="file" class="form-control" name="foto" id="img" ><br>
	<label for="textfield2">Fecha</label><br>
	<input type="date" name="fecha" class="form-control" >
	<label for="textfield2">Noticia</label><br>
	<textarea name="noticia" class="form-control" cols="55" rows="8" id="textfield2"></textarea><br>
	<input type="submit" class='btn btn-primary' name="guardar" id="button" value="Agregar Noticia">
	<button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModalScrollable">
  ayuda
</button>
</form>


<!-- Modal -->
<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Instrucciones</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <ul>

        	<li>Una vez ingresado los datos por favor clic en el boton agregar noticias </li>
        	<li>No hacer clic mas de 1 vez al boton agregar noticias </li>
        	<li>Para ver sus cambios en la tabla del admin regrese al  Panel y vuela a esta opcion de menu (agregar noticia) </li>
        	<li>Para ver sus cambios en la pagina web crear una nueva pestaña briane/noticias o copie el enlace  http://briane.pe/prueba/submenu/noticias.php   </li>
        	
        </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Entendido</button>
        
      </div>
    </div>
  </div>
</div>
<div class="form-control" style="margin-top: 10px">
<div class="header-table" style="padding: 15px">
		<h4 class="tite">Tabla de Noticias </h4>

	</div>
<div class="content table-responsive table-full-width" style="padding: 20px">
<table class="table table-secondary">
	<tr class="table-danger">
		<td scope="col">Titulo de Noticia</td>
		<td scope="col">Imagen</td>
		
		<td scope="col">Acciones</td>
	</tr>
	<?php 
	 $ss=mysqli_query($conexion,"SELECT * FROM noticia ORDER BY id_not DESC");
	 while ($rr=mysqli_fetch_array($ss)) {
	 	?>
	 	<tr>
	 		<td>
	 			<?php echo $rr['titulo']; ?>
	 		</td>
	 		<td>
	 			<center>
	 				<img width="50px" height="50px" src="../img/<?php echo $rr['foto']; ?>" >
	 			</center>
	 		</td>
	 		
	 		<td>
	 			<a href='admin_noticia_editar.php?idnot=<?php echo $rr['id_not']; ?>'><button type='button' class='btn btn-warning'>Editar</button></a>
	 			<a href='noticia_eliminar.php?id_not=<?php echo $rr['id_not'];?>&foto=<?php echo $rr['foto']; ?>'><button type='button' class='btn btn-danger'>eliminar</button></a>
	 		</td>
	 	</tr>
   <?php  } ?>
</table>
</div>
</div>
</div>
<script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="../js/manta.js"></script>
	
	<script type="text/javascript" src="../assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

<?php

 if (isset($_POST['guardar'])) {
 	
 	if (empty($_POST['titulo']) || empty($_POST['noticia']) || empty($_POST['fecha']) || empty($_FILES['foto']['name'])) 
 	{
 		echo "<p>Los campos son obligatorios</p>";
 	}else{

 		$titulo = $_POST['titulo'];
 		$noticia = $_POST['noticia'];
 		$fecha = $_POST['fecha'];

 		$foto = $_FILES['foto'];
 		$nombre_foto = $foto['name'];
 		$type  		= $foto['type'];
 		$url_temp  		= $foto['tmp_name'];
 		$imgNoticia = 'img_noticia.png';

 		if ($nombre_foto != '') {
 			$destino = '../img/';
 			$img_nombre = 'img_'.md5(date('d-m-y H:m:s'));
 			$imgNoticia = $img_nombre.'.jpg';
 			$src  = $destino.$imgNoticia;
 			
 		}
 		
 		$query_insert = mysqli_query($conexion,"INSERT INTO noticia(titulo,noticias,fecha,foto) VALUES ('$titulo','$noticia','$fecha','$imgNoticia')");

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


?>