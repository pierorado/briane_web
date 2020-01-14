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
include "../includes/conexion.php";
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Registro de Usuarios</title>
	<meta name="viewport"  content="width=device-width,user-scalable=no,initial-scale=1,maximum-scale=1.0,minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../css/estilosp.css">
	<link href="https://fonts.googleapis.com/css?family=Coda" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../fontawesome-free-5.0.13/web-fonts-with-css/css/fontawesome-all.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.min.css">
	<link rel="shortcut icon" type="image/x-icon" href="../img/ico_briane.ico">
</head>
<body>
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
			<li><a href="adminoticia.php">Agregar Noticias</a></li>
			<li><a href="adminofertas.php">Agregar ofertas</a></li>
			<li class="active2"><a href="adminusuarios.php">Usuarios</a></li>
			<?php } ?>
			<li><a href="#">Perfil</a></li>
			<li><a href="cerrar.php">Cerrar Sesion</a></li>
			 		
	 		</ul>
	 	
	  </nav> 
	</header>
	<div id="formulario-intranet">	
 		<div class="content-intranet">
 		<div class="card">
			<div class="card-header text-white bg-danger  mb-3">
 				<h5>Nuevo Usuario</h5>
 			</div>

			<div class="card-body">

			<form method="post" action="admin_operaregister.php" class="form-group" enctype="multipart/form-data" autocomplete="off" >
				<?php 

		     $sqltipo=mysqli_query($conexion,"SELECT * FROM tipo_documento");
		     $restipo=mysqli_num_rows($sqltipo);

		     ?>
			<div class="opcion">
             <i class="fa fa-user fa-2x cust" aria-hidden="true"></i> <label for="formGroupExampleInput">Tipo de Documento: </label>
			<select required id="idTipoDocumento" name="tipodoc" >
				<?php 
				
				  	if ($restipo >0) {
				  	    while ($tipo=mysqli_fetch_array($sqltipo)) {

				  				?>
				  					
				  				<option value="<?php echo $tipo["id_tipo"]; ?>"><?php echo $tipo["documento"]; ?></option>
				  				<?php 
				  			}	
				  	}


				  ?>
				  
			</select>
		     </div>

		  	     <div class="opcion" id="1" >
	             <i class="fa fa-user fa-2x cust" aria-hidden="true"></i> <label for="formGroupExampleInput">Número de Documento </label>
				<input type="text" class="form-control" id="idDocumento"  placeholder="Ingrese usuario" name="numero2" required >
			     </div>
	      
		     <?php 

		     $sqlrol=mysqli_query($conexion,"SELECT * FROM tipo_usuario");
		     $resrol=mysqli_num_rows($sqlrol);

		     ?>
		    <div class="opcion">
             <i class="fa fa-user fa-2x cust" aria-hidden="true"></i> <label for="formGroupExampleInput4">Tipo de Usuario: </label>
			<select required id="tiporol" name="tiporol" class="invione">
				  <?php 
				  
				  	if ($resrol >0) {
				  	    while ($rol=mysqli_fetch_array($sqlrol)) {
				  				?>
				  				<option value="<?php echo $rol["id_rol"]; ?>"><?php echo $rol["rol"]; ?></option>
				  				<?php 
				  			}	
				  	}


				  ?>
				  
			</select>
		     </div>
		     <div class="opcion">
             <i class="fa fa-user fa-2x cust" aria-hidden="true"></i> <label for="formGroupExampleInput">Nombres </label>
			<input type="text" class="form-control" id="formGroupExampleInput" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+{1,15}" required placeholder="Ingrese usuario" name="nombre" >
		     </div>

		     <div class="opcion">
             <i class="fa fa-user fa-2x cust" aria-hidden="true"></i> <label for="formGroupExampleInput">Apellido Paterno </label>
			<input type="text" class="form-control" id="formGroupExampleInput" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ]{1,15}" required placeholder="Ingrese usuario" name="paterno" >
		     </div>

		     <div class="opcion">
             <i class="fa fa-user fa-2x cust" aria-hidden="true"></i> <label for="formGroupExampleInput">Apellido Materno </label>
			<input type="text" class="form-control" id="formGroupExampleInput" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ]{1,15}" required placeholder="Ingrese usuario" name="materno" >
		     </div>

		      <div class="opcion">
             <i class="fa fa-user fa-2x cust" aria-hidden="true"></i> <label for="formGroupExampleInput">Telefono </label>
			<input type="text" class="form-control" id="formGroupExampleInput" required placeholder="Ingrese usuario" name="telefono" pattern="[A-Za-z0-9_-]{1,11}" >
		     </div>

		      <div class="opcion">
             <i class="fa fa-user fa-2x cust" aria-hidden="true"></i> <label for="formGroupExampleInput">Correo </label>
			<input type="text" class="form-control" id="formGroupExampleInput" required placeholder="Ingrese usuario" name="correo" pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$">
		     </div>
		     <i class="fa fa-user fa-2x cust" aria-hidden="true"></i> <label for="textfield">Imagen </label>
		     <div class="opcion">
		     	<input type="file" class="form-control" name="foto" id="img" >
		     </div>
			
		
			

		   <div class="opcion">
		   	<i class="fa fa-lock  fa-2x cust" aria-hidden="true"></i><label for="formGroupExampleInput">CONTRASEÑA</label>
			<input type="password" class="form-control" id="exampleInputPassword1" pattern="[A-Za-z0-9_-]{1,12}" required placeholder="ingrese clave" name="clave" >
		    </div> 
		    <div class="alert"></div>
		    	</div>
		      <div class="card-footer">               
		    <button type="submit" value="ingresar2" class="btn btn-dark" >Registrar</button> 
		    <button type="reset"  class="btn btn-dark">cancelar</button> 
		    <a href="adminusuarios.php" class="btn btn-dark" role="button" aria-pressed="true">Listo</a>
			</div>
		</form>

		</div>
		</div>


	  		</div>
	  	<script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
			<script type="text/javascript" src="../js/manta.js"></script>
		<script type="text/javascript" src="../assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>