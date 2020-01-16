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
	<meta charset="utf-8">
	<title>Panel |briane</title>
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
				<li class="active2"><a href="panel.php">Panel</a></li>
				<?php
				if ($_SESSION['idrol']== 1) {
					?>
					<li><a href="adminoticia.php">Agregar Noticias</a></li>
					<li><a href="adminofertas.php">Agregar ofertas</a></li>
					<li><a href="adminusuarios.php">Usuarios</a></li>
				<?php }else if($_SESSION['idrol']== 3){?>
					<li><a href="adminoticia.php">Agregar Noticias</a></li>
				<?php }?>
				<li><a href="adminprofile.php">Perfil</a></li>
				<li><a href="cerrar.php">Cerrar Sesion</a></li>

			</ul>

		</nav> 
	</header>

	<div class="informacion">
		<br>
		
				<div class="card">
					
						
						<div class="card-header">
							SERVICIOS
						</div>
						<div class="row">
							<div class="col">
							<div class="card-body">
								<blockquote class="blockquote mb-0">
									<div class="card mb-3" style="max-width: 540px;">
										<div class="row no-gutters">
											<div class="col-md-4">
												<a href="http://mail.google.com" target="_blank"><img src="../img/gmail.jpg" class="card-img" alt="..."></a>
											</div>
											<div class="col-md-8">
												<div class="card-body">
													<h5 class="card-title">Gmail BRIANE</h5>
													<p class="card-text" style="font-size: 12px">Permite acceder a su casillero de correo con todos los beneficios que trae Gmail, espacio de almacenamiento ilimitado, calendario, etiquetas y mucho más. Solo para usuarios con cuentas Gmail BRIANE.</p>

												</div>
											</div>
										</div>
									</div>

								</blockquote>
							</div>
							</div>

						<div class="col">
						
						<div class="card-body">
							<blockquote class="blockquote mb-0">
								<div class="card mb-3" style="max-width: 540px;">
									<div class="row no-gutters">
										<div class="col-md-4">
											<a href="https://bit.ly/31or53S"><img src="../img/office.jpg" class="card-img" alt="..."></a>
										</div>
										<div class="col-md-8">
											<div class="card-body">
												<h5 class="card-title">Office 365</h5>
												<p class="card-text" style="font-size: 12px">Crea, comparte y Colabore de forma gratuita con las versiones en línea de Microsoft Word, PowerPoint, Excel y OneNote. Guarde documentos, hojas de cálculo y presentaciones.</p>

											</div>
										</div>
									</div>
								</div>

							</blockquote>
						</div>
						</div>

					</div>

					<div class="row">
							<div class="col">
							<div class="card-body">
								<blockquote class="blockquote mb-0">
									<div class="card mb-3" style="max-width: 540px;">
										<div class="row no-gutters">
											<div class="col-md-4">
												<img src="../img/boletaspago.jpg" class="card-img" alt="...">
											</div>
											<div class="col-md-8">
												<div class="card-body">
													<h5 class="card-title">Boletas de Pago</h5>
													<p class="card-text" style="font-size: 12px">Permite acceder a su casillero de correo con todos los beneficios que trae Gmail, espacio de almacenamiento ilimitado, calendario, etiquetas y mucho más. Solo para usuarios con cuentas Gmail BRIANE.</p>

												</div>
											</div>
										</div>
									</div>

								</blockquote>
							</div>
							</div>

						<div class="col">
						
						<div class="card-body">
							<blockquote class="blockquote mb-0">
								<div class="card mb-3" style="max-width: 540px;">
									<div class="row no-gutters">
										<div class="col-md-4">
											<img src="../img/genesys.jpg" class="card-img" alt="...">
										</div>
										<div class="col-md-8">
											<div class="card-body">
												<h5 class="card-title">Genesys</h5>
												<p class="card-text" style="font-size: 12px">Permite acceder a su casillero de correo con todos los beneficios que trae Gmail, espacio de almacenamiento ilimitado, calendario, etiquetas y mucho más. Solo para usuarios con cuentas Gmail BRIANE.</p>

											</div>
										</div>
									</div>
								</div>

							</blockquote>
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