<?php
require '../includes/funciones.php';
include "../includes/conexion.php";

if (empty($_GET['idnot'])) 
{
	header('Location: adminoticia.php');
}
$idnot = $_GET['idnot'];

$query="SELECT * FROM noticia WHERE id_not = $idnot";

$consult= mysqli_query($conexion,$query);
$resul_consult = mysqli_num_rows($consult);

if ($resul_consult == 0) {
	header('Location: adminoticia.php');
}else{
	while ($data = mysqli_fetch_array($consult)) {
		$idnot = $data['id_not'];
		$titulo = $data['titulo'];
		$noticias = $data['noticias'];
		$fecha = $data['fecha'];

	}
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
	 				
			<li class="active2"><a href="adminoticia.php">Agregar Noticias</a></li>
			<li><a href="adminofertas.php">Agregar ofertas</a></li>
			<li><a href="adminusuarios.php">Usuarios</a></li>
			<li><a href="adminoticia.php">Agregar Noticias</a></li>
			<li><a href="adminprofile.php">Perfil</a></li>
			<li><a href="cerrar.php">Cerrar Sesion</a></li>
			 		
	 		</ul>
	 	
	  </nav> 
	</header>



	<div class="informacion">
<form method="post" class="form-control" enctype="multipart/form-data" action="">
	<input type="hidden" name="idnot" value="<?php echo $idnot ?>">
	<label for="textfield">Titulo de Noticia :</label>
	<input type="text" class="form-control" name="titulo" id="textfield" value="<?php echo $titulo ?>"><br>
	<label for="textfield">Imagen :</label><br>
	<label for="fileField"></label><br>
	<input type="file" class="form-control" name="foto" id="img" ><br>
	<label for="textfield2">Fecha</label><br>
	<input type="date" name="fecha" class="form-control"  value="<?php echo $fecha ?>">
	<label for="textfield2">Noticia</label><br>
	<textarea name="noticia" class="form-control" cols="55" rows="8" id="textfield2"><?php echo $noticias ?></textarea><br>
	<input type="submit" name="editar" id="button" value="editar" class='btn btn-warning'>
	<button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModalScrollable">
  ayuda
</button>
<a class="btn btn-primary" href="adminoticia.php" role="button">Cancelar</a>
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
        	<li>Si tiene alguna duda adicional   informar al programador</li>
        </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Entendido</button>
        
      </div>
    </div>
  </div>
</div>
</div>
<script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="../js/manta.js"></script>
	
	<script type="text/javascript" src="../assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

<?php

 if (isset($_POST['editar'])) {

 		$idnot = $_POST['idnot'];
		$titulo = $_POST['titulo'];
		$noticia = $_POST['noticia'];
		$fecha = $_POST['fecha'];
		
		if (empty($_FILES['foto']['name'])) {
		 		$query_edit=mysqli_query($conexion,"UPDATE noticia set titulo ='$titulo', noticias = '$noticia', fecha = '$fecha' WHERE id_not='$idnot'");
		 		echo " la oferta se modifico correctamente ,Refrescar ";


		 	}else{ 	
 	
		 	$query_select = mysqli_query($conexion,"SELECT foto from noticia WHERE id_not='$idnot'");
		 	while ($res=mysqli_fetch_array($query_select)) {
		 			unlink('../img/'.$res['foto']);
		 	}

		 	
		 	



			 	$destino='../img/';
			 	$img_nombre = 'img_'.md5(date('d-m-y H:m:s'));
	 			$imgNoticia = $img_nombre.'.jpg';
	 			$src=$destino.$imgNoticia;
			 	copy($_FILES['foto']['tmp_name'],$src);

			 	$query_edit=mysqli_query($conexion,"UPDATE noticia set titulo ='$titulo', noticias = '$noticia', fecha = '$fecha',foto = '$imgNoticia' WHERE id_not='$idnot'");
			 	if ($query_edit) {
			 	 	 echo " la oferta se modifico correctamente ,Refrescar ";
			 	 }else{
			 	 	echo "Error no se modifico , verifique que los campos no contengan ('') ";
			 	 }


			 	 }
 	 	
 }
?>