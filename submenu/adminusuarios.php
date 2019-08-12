<?php
session_start();




error_reporting(0);
$inicio=$_SESSION['active'];
if ($inicio==null || $inicio='') {
	header("location:intranet.php");

	die();

}else{
	require '../includes/funciones.php';
include "../includes/conexion.php";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Listado de  personal</title>
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
			<li><a href="adminprofile.php">Perfil</a></li>
			<li><a href="cerrar.php">Cerrar Sesion</a></li>
			 		
	 		</ul>
	 	
	  </nav> 
	</header>

<div class="informacion">
	<h1>Listado de usuarios</h1>
	<a href="adminregistro.php" class="btn btn-info" role="button" aria-pressed="true">Nuevo</a>
	<table class="table">
		<thead class="table-danger">
		<tr>
			<th >ID</th>
			<th>Numero</th>
			<th>Tipo de Documento</th>
			<th>Rol</th>
			<th>Clave</th>
			<th>Telefono</th>
			<th>Correo</th>
			<th>Nombre</th>
			<th>Paterno</th>
			<th>Materno</th>
			<th>Acciones</th>
			</thead>
		</tr>
		<?php

		$consulta="SELECT u.idusuario,u.numero,d.documento,r.rol,u.clave,u.telefono,u.correo,u.nombre,u.paterno,u.materno FROM `usuarios` u INNER JOIN tipo_usuario r ON u.idrol = r.id_rol INNER JOIN tipo_documento d ON u.idtipo = d.id_tipo";
		$respuesta=mysqli_query($conexion,$consulta);
		$fila=mysqli_num_rows($respuesta);
		if ($fila>0) {
			while ($datos=mysqli_fetch_array($respuesta)) {

				?>
				<tbody>
				<tr>
			<td scope="row"><?php echo $datos["idusuario"];?></td>
			<td><?php echo $datos["numero"];?></td>
			<td><?php echo $datos["documento"];?></td>
			<td><?php echo $datos["rol"];?></td>
			<td><?php echo $datos["clave"];?></td>
			<td><?php echo $datos["telefono"];?></td>
			<td><?php echo $datos["correo"];?></td>
			<td><?php echo $datos["nombre"];?></td>
			<td><?php echo $datos["paterno"];?></td>
			<td><?php echo $datos["materno"];?></td>
			<td>
				<a href="admineditar.php?idusuario=<?php echo $datos['idusuario'];?>" class="btn btn-info" role="button" aria-pressed="true">Editar</a>
				<a href="admineliminar.php?idusuario=<?php echo $datos['idusuario'];?>" class="btn btn-danger" role="button" aria-pressed="true">Eliminar</a>
			</td>
		</tr>
	</tbody>
		<?php
						# code...
					}	
						}
		?>
		
	</table>
</div>
<script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="../js/manta.js"></script>
		<script type="text/javascript" src="../assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>