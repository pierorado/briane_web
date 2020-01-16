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
	<meta charset="utf-8">
	<title>oferta |briane</title>
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
			if ($_SESSION['idrol']== 1) {
			 ?>
			<li><a href="adminoticia.php">Agregar Noticias</a></li>
			<li class="active2"><a href="adminofertas.php">Agregar ofertas</a></li>
			<li><a href="adminusuarios.php">Usuarios</a></li>
			<?php } ?>
			<li><a href="adminprofile.php">Perfil</a></li>
			<li><a href="cerrar.php">Cerrar Sesion</a></li>
			 		
	 		</ul>
	 	
	  </nav> 
	</header>
	<div class="informacion">
	<form method="post"  action="" class="form-control">
		<table>
			<tr>
				<td><label for="textfield1">Ingresar Puesto :</label></td>
				<td><input type="text" class="form-control" name="puesto" id="textfield1"><br><br></td>
			</tr>
			<tr>
				<td><label for="textfield2">Ingresar descripcion :</label></td>
				<td><textarea  name="descripcion"  class="form-control" cols="90" rows="5" id="textfield2"></textarea><br><br></td>
			</tr>
			<tr>
				<td><label for="textfield3">Ingresar requisitos :</label></td>
				<td><textarea name="requisitos" class="form-control" cols="100" rows="5" id="textfield3"></textarea><br><br></td>
			</tr>
			<tr>
				<td><label for="textfield4">Ingresar beneficios :</label></td>
				<td><textarea name="beneficios" class="form-control" cols="100" rows="5" id="textfield4"></textarea><br><br></td>
			</tr>
			<tr>
				<td><label for="textfield5">Ingresar requerimientos :</label></td>
				<td><textarea name="requerimientos" class="form-control" cols="100" rows="5" id="textfield5"></textarea><br><br></td>
			</tr>
			<tr>
				<td><label for="textfield6">Ingresar datos generales :</label></td>
				<td><textarea name="datos" class="form-control" cols="100" rows="5" id="textfield6"></textarea><br><br></td>
			</tr>
			<tr>
				<td><label for="textfield7">Fecha de publicacion :</label><br></td>
				<td><input type="date" name="fecha" class="form-control" id="textfield7"><br><br></td>
			</tr>

		</table>
		
		<input type="submit" name="guardar" id="button" class='btn btn-primary' value="Añadir">
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

        	<li>Una vez ingresado los datos por favor clic en el boton agregar ofertas </li>
        	<li>No hacer clic mas de 1 vez al boton agregar ofertas </li>
        	<li>Para ver sus cambios en la tabla del admin regrese al  Panel y vuela a esta opcion de menu (agregar ofertas) </li>
        	<li>Para ver sus cambios en la pagina web crear una nueva pestaña briane/ofertas o copie el enlace http://briane.pe/prueba/trabajas.php </li>
        	<li>Si tiene alguna duda adicional   informar al programador</li>
        </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Entendido</button>
        
      </div>
    </div>
  </div>
</div>
<div class="form-control" style="margin-top: 10px">
<div class="card" >
	<div class="header-table" style="padding: 15px">
		<h4 class="tite">Tabla de Ofertas</h4>

	</div>
	<div class="content table-responsive table-full-width" style="padding: 20px">
	<table  class="table table-secondary" >
		<tr class="table-danger">
			<th scope="col">#</th>
			<td scope="col">Puesto</td>
			<td scope="col">Fecha</td>
			<td scope="col">Acciones</td>
		</tr>
		<?php  
			$ss=mysqli_query($conexion,"SELECT * FROM ofertas ORDER BY id_ofertas DESC");
			while ($rr=mysqli_fetch_array($ss)) {

				$fecha= new DateTime($rr['fecha']);
				$fecha = $fecha->format("d-m-Y"); 

				?>
				<tr>
					<td>
						<?php echo $rr['id_ofertas']; ?>
					</td>
					<td>
						<?php echo $rr['puesto']; ?>
					</td>
					
					<td>
						<?php echo $fecha; ?>
					</td>
					
					<td>
	 				<a href='admin_oferta_editar.php?id_of=<?php echo $rr['id_ofertas']; ?>'><button type='button' class='btn btn-warning'>Editar</button></a>
	 				<a href='eliminar.php?id_of=<?php echo $rr['id_ofertas']; ?>'><button type='button' class='btn btn-danger'>eliminar</button></a>
	 				</td>
				</tr>
			
		<?php  } ?>
	</table>
	</div>
	</div>
	</div>
	</div>
	<script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="../js/manta.js"></script>
	<script type="text/javascript" src="../node_modules/popper.js/dist/popper.min.js"></script>
	<script type="text/javascript" src="../assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
<?php
 if (isset($_POST['guardar'])) {
 	$puesto =$_POST['puesto'];
 	$descripcion =$_POST['descripcion'];
 	$fecha =$_POST['fecha'];
 	$requisitos =$_POST['requisitos'];
 	$beneficios =$_POST['beneficios'];
 	$requerimientos =$_POST['requerimientos'];
 	$datos =$_POST['datos'];
 	if ($puesto==""|| $descripcion=="" || $fecha=="" || $requisitos=="" ||$beneficios=="" ||$requerimientos==""|| $datos=="") {
 		echo "Los campos son obligatorios";
 	}else{
 		$query=mysqli_query($conexion,"INSERT INTO ofertas (puesto,descripcion,fecha,requisitos,beneficios,requerimientos,datos) VALUES ('$puesto','$descripcion','$fecha','$requisitos','$beneficios','$requerimientos','$datos')");
    if ($query) {
 	 	 echo " la oferta se inserto correctamente ,Refrescar";
 	 }else{
 	 	echo "Error no se inserto , verifique que los campos no contengan ('') ";
 	 }
 	}
   
 }
?>