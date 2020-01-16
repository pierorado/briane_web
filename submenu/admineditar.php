<?php
session_start();
error_reporting(0);
$inicio=$_SESSION['active'];
if ($inicio==null || $inicio='') {
	header("location:intranet.php");

	die();
}else{
if ($_SESSION['idrol']!= 1) {
 	header("location:panel.php");
}

require '../includes/funciones.php';
include "../includes/conexion.php";
}
if (empty($_GET['idusuario'])) {
			header('location:adminusuarios.php');
			# code...
		}
		$idusuario=$_GET['idusuario'];
		$sql=mysqli_query($conexion,"SELECT u.idusuario,u.profile_id_numero,d.documento,r.rol,u.clave,p.telefono,p.correo,p.nombre,p.paterno,p.materno,p.imagen FROM `usuarios` u INNER JOIN tipo_usuario r ON u.idrol = r.id_rol INNER JOIN tipo_documento d ON u.idtipo = d.id_tipo INNER JOIN profile p ON u.profile_id_numero = p.id_numero WHERE u.idusuario=$idusuario");
		$result=mysqli_num_rows($sql);
		if ($result==0) {
			header('Location:adminusuarios.php');
		}else{

			while ($data=mysqli_fetch_array($sql)) {
 			 $idusu=$data["idusuario"];
			 $num=$data["profile_id_numero"];
			 $num2=$data["profile_id_numero"];
			 $num3=$data["profile_id_numero"];
			 $idtipo=$data["idtipo"];
			 $docum=$data["documento"];
			 $idrol=$data["idrol"];
			 $rol=$data["rol"];
			 $clave=$data["clave"];
			 $telef=$data["telefono"];
			 $email=$data["correo"];
			 $nom=$data["nombre"];
			 $pater=$data["paterno"];
			 $mater=$data["materno"];
			 $imge=$data["imagen"];
			 
			}
		}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Editar Usuarios</title>
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
			if ($_SESSION['idrol']== 1) {
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
 				<h5>Editar Usuario</h5>
 			</div>

			<div class="card-body">

			<form method="post" action="admin_operaeditar.php" class="form-group"  enctype="multipart/form-data" autocomplete="off" >
				<?php 

		     $sqltipo=mysqli_query($conexion,"SELECT * FROM tipo_documento");
		     $restipo=mysqli_num_rows($sqltipo);

		     ?>
			<input type="hidden" name="iduser" value="<?php echo $idusu; ?>">
			<input type="hidden" name="numant" value="<?php echo $num2; ?>">
			<div class="opcion">

             <i class="fa fa-user fa-2x cust" aria-hidden="true"></i> <label for="formGroupExampleInput">Tipo de Documento: </label>
			<select required id="idTipoDocumento" name="tipodoc" class="invione">
				<option value="<?php echo $idtipo ?>" selected><?php echo $docum ?></option>
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
				<input type="text" class="form-control" id="idDocumento"  required  name="numero2" value="<?php echo $num; ?>">
			     </div>


		     
		     <?php 

		     $sqlrol=mysqli_query($conexion,"SELECT * FROM tipo_usuario");
		     $resrol=mysqli_num_rows($sqlrol);

		     ?>
		     <div class="opcion">
             <i class="fa fa-user fa-2x cust" aria-hidden="true"></i> <label for="formGroupExampleInput4">Tipo de Usuario: </label>
			<select required id="tiporol" name="tiporol" class="invione">
				<option value="<?php echo $idrol ?>" selected><?php echo $rol ?></option>
			
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
             <i class="fa fa-user fa-2x cust" aria-hidden="true"></i> <label for="formGroupExampleInput5">Nombres </label>
			<input type="text" class="form-control" id="formGroupExampleInput5" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+{1,15}" required placeholder="Ingrese usuario" name="nombre" value="<?php echo $nom; ?>" >
		     </div>

		     <div class="opcion">
             <i class="fa fa-user fa-2x cust" aria-hidden="true"></i> <label for="formGroupExampleInput6">Apellido Paterno </label>
			<input type="text" class="form-control" id="formGroupExampleInput6" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ]{1,15}" required placeholder="Ingrese usuario" name="paterno"  value="<?php echo $pater; ?>">
		     </div>

		     <div class="opcion">
             <i class="fa fa-user fa-2x cust" aria-hidden="true"></i> <label for="formGroupExampleInput7">Apellido Materno </label>
			<input type="text" class="form-control" id="formGroupExampleInput7" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ]{1,15}" required placeholder="Ingrese usuario" name="materno" value="<?php echo $mater; ?>">
		     </div>

		      <div class="opcion">
             <i class="fa fa-user fa-2x cust" aria-hidden="true"></i> <label for="formGroupExampleInput8">Telefono </label>
			<input type="text" class="form-control" id="formGroupExampleInput8" required placeholder="Ingrese usuario" name="telefono" pattern="[A-Za-z0-9_-]{1,11}" value="<?php echo $telef; ?>">
		     </div>

		      <div class="opcion">
             <i class="fa fa-user fa-2x cust" aria-hidden="true"></i> <label for="formGroupExampleInput9">Correo </label>
			<input type="text" class="form-control" id="formGroupExampleInput9" required placeholder="Ingrese usuario" name="correo" pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" value="<?php echo $email; ?>">
		     </div>
		     
		     <div class="opcion">
		     	<i class="fa fa-user fa-2x cust" aria-hidden="true"></i> <label for="textfield">Imagen </label>
		     	<input type="file" class="form-control" name="foto" id="img" >
		     </div>

		   <div class="opcion">
		   	<i class="fa fa-lock  fa-2x cust" aria-hidden="true"></i><label for="formGroupExampleInput1">CONTRASEÑA</label>
			<input type="text" class="form-control" id="exampleInputPassword1" pattern="[A-Za-z0-9_-]{1,12}" required placeholder="ingrese clave" name="clave" value="<?php echo $clave; ?>">
		    </div> 
		    <div class="alert"></div>
		    	</div>
		      <div class="card-footer">               
		    <button type="submit" value="ingresar2" class="btn btn-dark" >Actualizar</button> 
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