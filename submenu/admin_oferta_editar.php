<?php


require '../includes/funciones.php';
include "../includes/conexion.php";

if (empty($_GET['id_of'])) 
{
	header('Location: adminofertas.php');
}
$idofert = $_GET['id_of'];

$query="SELECT * FROM ofertas WHERE id_ofertas = $idofert";

$consult= mysqli_query($conexion,$query);
$resul_consult = mysqli_num_rows($consult);

if ($resul_consult == 0) {
	header('Location: adminofertas.php');
}else{
	while ($data = mysqli_fetch_array($consult)) {
		$idofert = $data['id_ofertas'];
		$puesto = $data['puesto'];
		$descripcion = $data['descripcion'];
		$fecha = $data['fecha'];
		$requisitos = $data['requisitos'];
		$beneficios = $data['beneficios'];
		$requerimientos = $data['requerimientos'];
		$datos = $data['datos'];

		

	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>actualizar - oferta</title>
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
	 				
			<li><a href="adminoticia.php">Agregar Noticias</a></li>
			<li class="active2"><a href="adminofertas.php">Agregar ofertas</a></li>
			<li><a href="adminusuarios.php">Usuarios</a></li>
			
			<li><a href="adminprofile.php">Perfil</a></li>
			<li><a href="cerrar.php">Cerrar Sesion</a></li>
			 		
	 		</ul>
	 	
	  </nav> 
	</header>
	<div class="informacion">
	<form method="post"  action="" class="form-control">
		<input type="hidden" name="idofert" value="<?php echo $idofert ?>">
		<table>

			<tr>
				
				<td><label for="textfield1">Ingresar Puesto :</label></td>
				<td><input type="text" name="puesto" class="form-control" id="textfield1" value="<?php echo $puesto ?>"><br><br></td>
			</tr>
			<tr>
				<td><label for="textfield2">Ingresar descripcion :</label></td>
				<td><textarea name="descripcion" class="form-control" cols="90" rows="5" id="textfield2" ><?php echo $descripcion ?></textarea><br><br></td>
			</tr>
			<tr>
				<td><label for="textfield3">Ingresar requisitos :</label></td>
				<td><textarea name="requisitos" class="form-control" cols="100" rows="5" id="textfield3" ><?php echo $requisitos ?></textarea><br><br></td>
			</tr>
			<tr>
				<td><label for="textfield4">Ingresar beneficios :</label></td>
				<td><textarea name="beneficios" class="form-control" cols="100" rows="5" id="textfield4" ><?php echo $beneficios ?></textarea><br><br></td>
			</tr>
			<tr>
				<td><label for="textfield5">Ingresar requerimientos :</label></td>
				<td><textarea name="requerimientos" class="form-control" cols="100" rows="5" id="textfield5" ><?php echo $requerimientos ?></textarea><br><br></td>
			</tr>
			<tr>
				<td><label for="textfield6">Ingresar datos generales :</label></td>
				<td><textarea name="datos" cols="100" class="form-control" rows="5" id="textfield6" ><?php echo $datos ?></textarea><br><br></td>
			</tr>
			<tr>
				<td><label for="textfield7">Fecha de publicacion :</label><br></td>
				<td><input type="date" name="fecha" class="form-control" id="textfield7" value="<?php echo $fecha ?>"><br><br></td>
			</tr>

		</table>
		
		<input type="submit" name="editar" id="button" value="editar" class='btn btn-warning'>
		<a class="btn btn-primary" href="adminofertas.php" role="button">Cancelar</a>
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
	
	</div>
	<script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="../js/manta.js"></script>
	
	<script type="text/javascript" src="../assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
<?php
 if (isset($_POST['editar'])) {
		$idofert = $_POST['idofert'];
		$puesto = $_POST['puesto'];
		$descripcion = $_POST['descripcion'];
		$fecha = $_POST['fecha'];
		$requisitos = $_POST['requisitos'];
		$beneficios = $_POST['beneficios'];
		$requerimientos = $_POST['requerimientos'];
		$datos = $_POST['datos'];

if ($puesto==""|| $descripcion=="" || $fecha=="" || $requisitos=="" ||$beneficios=="" ||$requerimientos==""|| $datos=="") {
 		echo "Los campos son obligatorios";
 	}else{
	$editar = "UPDATE ofertas SET puesto = '$puesto', descripcion = '$descripcion', fecha = '$fecha', requisitos = '$requisitos', beneficios = '$beneficios', requerimientos = '$requerimientos', datos = '$datos' WHERE id_ofertas = '$idofert' ";
		$sql_update=mysqli_query($conexion,$editar);
		if ($sql_update) {
 	 	 echo "La oferta se modifico correctamente";
 	 }else{
 	 	echo "Error no se inserto ,verifique que los campos no contengan ('')";
 	 }

}
}
?>