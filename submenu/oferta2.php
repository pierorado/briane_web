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
	 				
			 		<li  ><a href="../index.php" >VALOR AGREGADO</a></li>
			 		
			 		<li ><a href="../submenu/briane.html" >BRIANE
			 			<span class="drop-icon">▾</span>
        				<label title="Toggle Drop-down" class="drop-icon" for="sm0">▾</label>
        				</a>
        				<input type="checkbox" id="sm0">
			 			<ul class="sub-menu">
			 				<li><a href="../submenu/briane.html#seccion1" >Misión,vision,valores</a></li>
			 				<li><a href="../submenu/briane.html#seccion2" >Historia</a></li>
			 				<li><a href="../submenu/briane.html#seccion3" >Cultura Briane</a></li>
			 				<li><a href="../submenu/briane.html#seccion4" >Certificaciones</a></li>
			 			</ul>
			 		</li>

			 		<li ><a href="../division.html">SERVICIOS
			 			<span class="drop-icon">▾</span>
        				<label title="Toggle Drop-down" class="drop-icon" for="sm1">▾</label>
        				</a>
        				<input type="checkbox" id="sm1" >
			 			<ul class="sub-menu">
			 				<li><a href="../division.html#propuesta" >Nuetra propuesta de valor</a></li>
			 				<li><a href="../division.html#servicios" >Servicios Portuarios</a></li>
			 				<li><a href="../division.html#operacion" >Operación Minera</a></li>
			 				<li><a href="../division.html#ventajas" >Ventajas Competitivas</a></li>
			 				
			 			</ul>
			 		</li>
			 		<li><a href="../estandares.html" >ESTANDARES DE GESTIÓN </a></li>
			 		<li class="active2"><a href="../trabajas.php" >TRABAJA CON NOSOTROS
			 			<span class="drop-icon">▾</span>
        				<label title="Toggle Drop-down" class="drop-icon" for="sm2">▾</label>
        			</a>
        				<input type="checkbox" id="sm2">
			 			<ul class="sub-menu">
			 				<li><a href="../trabajas.php#seccion5" >¿Porqué elegir BRIANE?</a></li>
			 				<li><a href="../trabajas.php#seccion6" >Nuestra Comunidad</a></li>
			 				<li><a href="../trabajas.php#seccion7">Únete a Nosotros</a></li>
			 			</ul>
			 		</li>
			 		<li ><a href="../submenu/noticias.php" >NOTICIAS</a></li>
			 		<li><a href="../contactos.html" >CONTÁCTENOS</a></li>
			 		<li ><a href="#" >MÁS
			 			<span class="drop-icon">▾</span>
        				<label title="Toggle Drop-down" class="drop-icon" for="sm3">▾</label>
        			</a>
        				<input type="checkbox" id="sm3">
			 			<ul class="sub-menu">
			 				<li><a href="intranet.php" >INTRANET</a></li>
			 			<li><a href="http://briane.pe/Osticket/upload/index.php"target="_blank">TICKETS</a></li>
			 			</ul>
			 		</li>
	 	</ul>
	 	
	  </nav> 
	</header>
	<?php
 if(isset($_GET['id_ofertas'])) {
 	$consul=mysqli_query($conexion,"SELECT * FROM ofertas WHERE id_ofertas = '".$_GET['id_ofertas']."'");
 	while ($rr=mysqli_fetch_array($consul)) {
 		$fecha = new DateTime($rr['fecha']);
		$fecha = $fecha->format("d-m-Y"); 
 	?>
	<section class="parrafo" id="seccion3">
	  		<div class="entrada-oferta2">
	  			<img src="../img/fondo1.jpg" class="fondo_oferta2">
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
	    <p><i class="fas fa-angle-right"></i><?php echo  nl2br($rr['descripcion']); ?> </p>
		<h4>Requisitos:</h4>
	    <p><i class="fas fa-angle-right"></i><?php echo  nl2br($rr['requisitos']); ?></p>
	    <h4>Beneficios:</h4>
	   	<p><i class="fas fa-angle-right"></i><?php echo  nl2br($rr['beneficios']); ?></p>
	   	<h4>Requerimientos:</h4>
	   	<p><i class="fas fa-angle-right"></i><?php echo  nl2br($rr['requerimientos']); ?></p>
	   	<h4>Datos Generales:</h4>
	   	<p><i class="fas fa-angle-right"></i><?php echo  nl2br($rr['datos']); ?></p>
		<h4>Fecha de publicación:</h4>
		<p><i class="fas fa-angle-right"></i><?php echo $fecha ?></p>
		</div>
			</div>			
		</div>
     	
   <?php 
 }
}
?>
<div class="body-cont">
<section class="parrafo" id="seccion7">
			

			
	  		<div class="row">
	  		<div class="formu_works col-md-7 ">
	  			<div class="seccion6BI">
	  				<h2>Únete a Nosotros  </h2>
	  				<h5>INGRESA TUS DATOS</h5>
	  				<h3></h3>
	  				<form class="form" action="mail_offer_detail" autocomplete="off" enctype="multipart/form-data">  
						  <div class="form-group">
						    <label for="validationTooltip01">Nombre</label>
						    <input type="text" class="form-control" id="validationTooltip01"  required>
					      
						  </div>

						  <div class="form-group">
						    <label for="validationTooltip01">E-mail</label>
						    <input type="text" class="form-control" id="validationTooltip01"  required>
						    
						  </div>

						  <div class="form-group">
						    <label for="validationTooltip01">Telefono</label>
						    <input type="text" class="form-control" id="validationTooltip01"  required>
						    
						  </div>

						  <div class="form-group">
					         <label for="validationTooltip01">Ciudad</label>
						    <input type="text" class="form-control" id="validationTooltip01"  required>
					    
					     </div>
					  	<div class="form-group">
					    <label for="validationTooltip01">Puesto de Trabajo</label>
						   <input type="text" class="form-control" id="validationTooltip01"  required>
					    
					  </div>
					  
					  <div class="form-group">
					    <label for="exampleFormControlFile1">Adjuntar CV</label>
					    <input type="file" class="form-control-file" id="exampleFormControlFile1" required>
					  </div>
					

						  <button type="submit" class="btn btn-dark">Enviar</button>
						  <button type="reset" name="cancelar" class="btn btn-dark">Borrar</button>
					</form>
	  			</div>
	  					
	  		</div>
	  			
	  	</div>
	  	
		</section>
		</div>

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
	<script type="text/javascript" src="../assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
