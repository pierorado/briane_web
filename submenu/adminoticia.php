<?php
session_start();

error_reporting(0);
$inicio=$_SESSION['active'];
if ($inicio==null || $inicio='') {
	header("location:intranet.php");

	die();

}else{
if ($_SESSION['rol']!= 1) {
 	header("location:panel.php");
}
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
			<?php } ?>
			<li><a href="adminprofile.php">Perfil</a></li>
			<li><a href="cerrar.php">Cerrar Sesion</a></li>
			 		
	 		</ul>
	 	
	  </nav> 
	</header>



	<div class="informacion">
<form method="post" enctype="multipart/form-data" action="">
	<label for="textfield">Titulo de Noticia :</label>
	<input type="text" name="titulo" id="textfield"><br>
	<label for="textfield">Imagen :</label><br>
	<label for="fileField"></label><br>
	<input type="file" name="img" id="img" ><br>
	<label for="textfield2">Noticia</label><br>
	<textarea name="noticia" cols="55" rows="8" id="textfield2"></textarea><br>
	<input type="submit" name="guardar" id="button" value="Agregar Noticia">
	
</form>
<button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModalScrollable">
  ayuda
</button>

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

<table width="100%" border="1" rules="all">
	<tr>
		<td>Titulo de Noticia</td>
		<td>Imagen</td>
		<td>Noticia</td>
		<td>Acciones</td>
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
	 				<img width="50px" height="50px" src="../img/foto_<?php echo $rr['id_not']; ?>.jpg" >
	 			</center>
	 		</td>
	 		<td>
	 			 <?php echo $rr['noticias']; ?>
	 		</td>
	 		<td>
	 		
	 			<a href='eliminar.php?id=<?php echo $rr['idnot']; ?>'><button type='button' class='btn btn-danger'>eliminar</button></a>
	 		</td>
	 	</tr>
   <?php  } ?>
</table>
</div>
<script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="../js/manta.js"></script>
	<script type="text/javascript" src="../node_modules/popper.js/dist/popper.min.js"></script>
	<script type="text/javascript" src="../assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

<?php

 if (isset($_POST['guardar'])) {
 	
 $query=mysqli_query($conexion,"insert into noticia (titulo,noticia,fecha) values (' ".$_POST['titulo']."','".$_POST['noticia']."' ,NOW())" );
 if ($query) {    
 	 	 echo "<h1>la noticia se inserto correctamente .</h1>";
 	 }
 	 
 $ss=mysqli_query($conexion,"SELECT MAX(idnot) as id_maximo FROM noticia");
 if ($rr=mysqli_fetch_array($ss)) {
 	   $id_maximo=$rr['id_maximo'];
 }
		 $nameimagen=$_FILES['img']['name'];
		 $tmpimagen=$_FILES['img']['tmp_name'];
		 $urlnueva="../img/foto_".$id_maximo.".jpg";
		 if (is_uploaded_file($tmpimagen)) {
		 	copy($tmpimagen,$urlnueva);
		 	
		 }else{
		 	echo "error";
		 	 
 }
 }
?>