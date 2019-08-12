<?php
session_start();

require '../includes/funciones.php';
include "../includes/conexion.php";


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Inicio |oferta2</title>
	<meta name="viewport"  content="width=device-width,user-scalable=no,initial-scale=1,maximum-scale=1.0,minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../css/estilosp.css">
	<link href="https://fonts.googleapis.com/css?family=Coda" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../fontawesome-free-5.0.13/web-fonts-with-css/css/fontawesome-all.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.min.css">
	<link rel="shortcut icon" type="image/x-icon" href="../img/ico_briane.ico">
</head>
<body style="background-color: #FFFFFF">
	 <div class="contenedor" > 
		<header>
		
		<div id="barra1">
			<nav class="menu">
	 		<div class="container-menu">
	 			<div class="logo">
	 				<div class="logo-name">
	 					<img src="../img/logo02.png">
	 					
	 					
	 				</div>
	 				<div class="icon-menu">
	 					<a href="#" id="btn-menu" class="btn-menu"><span class="fa fa-bars"></span></a>
	 				</div>
	 			</div>
	 		</div>
	 		<div class="menu-link">
	 			<ul >
			 		<li><a href="../index.php" class="menu_item"  >VALOR AGREGADO</a></li>
			 		<li><a href="briane.html" class="menu_item">BRIANE</a>
			 			<ul class="submenu">
			 				<li><a href="briane.html#seccion1" class="submenu_item">Misión,vision,valores</a></li>
			 				<li><a href="briane.html#seccion2" class="submenu_item">Historia</a></li>
			 				<li><a href="briane.html#seccion3" class="submenu_item">Cultura Briane</a></li>
			 				<li><a href="briane.html#seccion4" class="submenu_item">Certificaciones</a></li>
			 			</ul>
			 		</li>
			 		<li><a href="../division.html" class="../menu_item">SERVICIOS</a>
			 			<ul class="submenu">
			 				<li><a href="../division.html#propuesta" class="submenu_item">Nuetra propuesta de valor</a></li>
			 				<li><a href="../division.html#servicios" class="submenu_item">SERVICIOS PORTUARIOS</a></li>
			 				<li><a href="../division.html#construccion" class="submenu_item">CONSTRUCCIÓN</a></li>
			 				<li><a href="../division.html#mineria" class="submenu_item">MINERÍA Y ENERGÍA</a></li>
			 				<li><a href="../division.html#proyectos" class="submenu_item">PROYECTOS</a></li>
			 			</ul>
			 		</li>
			 		<li><a href="../estandares.html" class="menu_item">ESTANDARES DE GESTIÓN </a></li>
			 		<li class="active1"><a href="../trabajas.php" class="menu_item">TRABAJA CON NOSOTROS</a>
			 		<ul class="submenu">
			 				<li><a href="../trabajas.php#seccion5" class="submenu_item">¿Porqué elegir BRIANE?</a></li>
			 				<li><a href="../trabajas.php#seccion6" class="submenu_item">Nuestra Comunidad</a></li>
			 				<li><a href="../trabajas.php#seccion7" class="submenu_item">Únete a Nosotros</a></li>
			 			</ul></li>
			 		<li><a href="noticias.php" class="menu_item">NOTICIAS</a></li>
			 		<li><a href="../contactos.html" class="menu_item">CONTACTENOS</a></li>
			 		<li><a href="../submenu/intranet.php" class="menu_item">MÁS</a>
			 			<ul class="submenu">
			 				<li><a href="../submenu/intranet.php" class="submenu_item">INTRANET</a></li>
			 			</ul>
			 		</li>
	 	</ul>
	 	</div>
	  </nav>
		</div> 
	</header>
	<?php
 if(isset($_GET['id_ofertas'])) {
 	$consul=mysqli_query($conexion,"SELECT * FROM ofertas WHERE id_ofertas = '".$_GET['id_ofertas']."'");
 	while ($rr=mysqli_fetch_array($consul)) {
 	?>
	<section class="parrafo" id="seccion3">
	  		<div class="entrada-oferta2">
	  			<img src="../img/fondo1.jpg" class="fondo">
	  		<div class="informacion">
	  			<div class="oferta-contenido">
	  				
	  				
	  				<h2><?php echo $rr['puesto']; ?></h2>
	  				
	  				
	  				<a href="#seccion7" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">INGRESA TU CV</a>
	  				
	  			

	  			</div>

	  		 </div>
	  		</div>
	  		
	  		</section>	
	  
		<div class="datos-oferta2">
		<div class="informacion">
		<div class="contenido-datos-oferta2">
 		<h4>Descripción:</h4>
	    <p><i class="fas fa-angle-right"></i><?php echo $rr['descripcion']; ?> </p>
		<h4>Requisitos:</h4>
	    <p><i class="fas fa-angle-right"></i><?php echo $rr['requisitos']; ?></p>
	    <h4>Beneficios:</h4>
	   	<p><i class="fas fa-angle-right"></i><?php echo $rr['beneficios']; ?></p>
	   	<h4>Requerimientos:</h4>
	   	<p><i class="fas fa-angle-right"></i><?php echo $rr['requerimientos']; ?></p>
	   	<h4>Datos Generales:</h4>
	   	<p><i class="fas fa-angle-right"></i><?php echo $rr['datos']; ?></p>
		<h4>Fecha de publicación:</h4>
		<p><i class="fas fa-angle-right"></i><?php echo date("d/m/Y",strtotime($rr['fecha'])); ?></p>
		</div>
			</div>			
		</div>
     	
   <?php 
 }
}
?>

<section class="parrafo" id="seccion7">
			

			<div class="informacion">
	  		<div class="row">
	  		<div class="col">
	  			<div class="seccion6BI">
	  				<h2>Únete a Nosotros  </h2>
	  				<h5>INGRESA TUS DATOS</h5>
	  				<h3></h3>
	  				<form class="was-validated " novalidate>  
						  <div class="form-group">
						    <label for="validationTooltip01">Nombre</label>
						    <input type="text" class="form-control" id="validationTooltip01" style="width: 540px; "  required>
					      <div class="valid-tooltip" style="margin-top: -360px;margin-left: 100px;" >
					       ¡Se ve bien!
					      </div>
						  </div>
						  <div class="form-group">
						    <label for="validationTooltip01">E-mail</label>
						    <input type="text" class="form-control" id="validationTooltip01" style="width: 540px; " required>
						    <div class="valid-tooltip" style="margin-top: -280px;margin-left: 100px;" >
					       ¡Se ve bien!
					      </div>

						  </div>
						  <div class="form-group">
						    <label for="validationTooltip01">Telefono</label>
						    <input type="text" class="form-control" id="validationTooltip01"style="width: 540px; " required>
						    <div class="valid-tooltip" style="margin-top: -200px;margin-left: 100px;" >
					       ¡Se ve bien!
					      </div>
						  </div>
						  <div class="form-group">
					    <label for="validationTooltip01">Ciudad</label>
						    <input type="text" class="form-control" id="validationTooltip01"style="width: 540px; " required>
					    <div class="valid-tooltip" style="margin-top: -80px;margin-left: 180px;" >
					       ¡Se ve bien!
					      </div>
					  </div>
					  	<div class="form-group">
					    <label for="validationTooltip01">Puesto de Trabajo</label>
						    <input type="text" class="form-control" id="validationTooltip01"style="width: 540px; " required>
					    <div class="valid-tooltip" style="margin-top: -80px;margin-left: 180px;" >
					       ¡Se ve bien!
					      </div>
					  </div>
					  
					  <div class="form-group">
					    <label for="exampleFormControlFile1">Example file input</label>
					    <input type="file" class="form-control-file" id="exampleFormControlFile1">
					  </div>
					

						  <button type="submit" class="btn btn-dark">Enviar</button>
						  <button type="reset" name="cancelar" class="btn btn-dark">Borrar</button>
					</form>
	  			</div>
	  					
	  		</div>
	  			
	  	</div>
	  	</div>
		</section>

</div>
<footer>
	<div class="separador"></div>
	  			<div class="pie_body">
	  				<div class="piedpagina1">
	  					<img src="../img/logo01.png" >
	  				 <p>BRIANE® nace en 1980 en  Lima-Perú. Iniciando operaciones trasladando carga en el puerto  del<br> Callao . Ofrecemos servicios de transporte  con <br>una variada flota de equipo y plataforma. </p>
	  				 
	  				 <div class="Copyright">
	  				 	<p>Copyright © 2018 BRIANE </p>	
	  				</div>
	  				</div>

	  				<div class="piedpagina2">
		  				 <h4>SIEMPRE LISTOS PARA SERVIRTE</h4>
		  				 <div class="pie_colum">
		  					<div class="pie_row_colum">
		  						<i class="fas fa-home"></i>
		  						<label>TRANSPORTES  BRIANE  <br>Av.Elmer Faucett N° 5104 - Urb.Las Fresas-Callao.</label>

		  					</div>
		  					<div class="pie_row_colum">
		  						<i class="fas fa-phone"></i>
		  						<label> (511)574-06-76</label>
		  					</div>
		  					<div class="pie_row_colum">
		  						<i class="far fa-envelope"></i>
		  						<label>info@supervan.pe</label>
		  					</div>
		  					
		  				</div>
	  				</div>

	  				<div class="piedpagina3">
	  					<h4>ENCUÉNTRANOS EN LAS REDES SOCIALES</h4>
	  					<div class="facebook1">
	  				   <a href="https://www.facebook.com/transportesbriane/" ><i class="fab fa-facebook-f" style="" ></i></a>
	  				   </div> 
	  				   <div class="redes">
	  				   <img src="../img/youtube.png" class="youtube" style="width: 35px;height: 35px;">
	  				  <img src="../img/linkedin.png" class="linkedin" style="width: 35px;height: 35px;margin-left: 10px;">
	  				  </div>
	  				</div>
	  				
	  			</div>
	  			
	  			
	  		</footer>
	<script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="../js/manta.js"></script>
	<script type="text/javascript" src="../node_modules/popper.js/dist/popper.min.js"></script>
	<script type="text/javascript" src="../assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
