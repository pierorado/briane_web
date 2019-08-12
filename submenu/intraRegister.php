<?php


require '../includes/funciones.php';
include "../includes/conexion.php";




?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Inicio |briane</title>
	<meta name="viewport"  content="width=device-width,user-scalable=no,initial-scale=1,maximum-scale=1.0,minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../css/estilosp.css">
	<link href="https://fonts.googleapis.com/css?family=Coda" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../fontawesome-free-5.0.13/web-fonts-with-css/css/fontawesome-all.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.min.css">
	<link rel="shortcut icon" type="image/x-icon" href="../img/ico_briane.ico">
</head>
<body style="background-color: #F8F8F8">
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
			 				<li><a href="../division.html#servicios" >SERVICIOS PORTUARIOS</a></li>
			 				<li><a href="../division.html#construccion" >CONSTRUCCIÓN</a></li>
			 				<li><a href="../division.html#mineria" >MINERÍA Y ENERGÍA</a></li>
			 				<li><a href="../division.html#proyectos" >PROYECTOS</a></li>
			 			</ul>
			 		</li>
			 		<li><a href="../estandares.html" >ESTANDARES DE GESTIÓN </a></li>
			 		<li ><a href="../trabajas.php" >TRABAJA CON NOSOTROS
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
			 		<li><a href="../submenu/noticias.php" >NOTICIAS</a></li>
			 		<li><a href="../contactos.html" >CONTÁCTENOS</a></li>
			 		<li class="active2" ><a href="#" >MÁS
			 			<span class="drop-icon">▾</span>
        				<label title="Toggle Drop-down" class="drop-icon" for="sm3">▾</label>
        			</a>
        				<input type="checkbox" id="sm3">
			 			<ul class="sub-menu">
			 				<li class="active2"><a href="intranet.php" >INTRANET</a></li>
			 			<li ><a href="http://briane.pe/Osticket/upload/index.php"target="_blank">TICKETS</a></li>
			 			</ul>
			 		</li>
	 	</ul>
	 	
	  </nav> 
	</header>
		<div id="formulario-intranet">	
 		<div class="content-intranet">
 		<div class="card">
			<div class="card-header text-white bg-danger  mb-3">
 				<h5>Registrarse</h5>
 			</div>
			<div class="card-body">

			<form method="post" action="registroadmin.php" class="form-group" autocomplete="off" >

			<div class="opcion">
             <i class="fa fa-user fa-2x cust" aria-hidden="true"></i> <label for="formGroupExampleInput">Tipo de Documento: </label>
			<select required id="idTipoDocumento"  name="tipo">
				  <option value="">seleccione</option>
				  <option value="1">DNI</option>
				  <option value="2">Carnet de Extranjería</option>
				  <option value="3">PTP</option>
				  
			</select>
		     </div>

		   
			      <div class="opcion" id="1" >
	             <i class="fa fa-user fa-2x cust1" aria-hidden="true"></i> <label for="formGroupExampleInput">Número de Documento </label>
				<input type="text" class="form-control" id="idDocumento"  required placeholder="Ingrese usuario"  name="numero2"  >
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


		   <div class="opcion">
		   	<i class="fa fa-lock  fa-2x cust" aria-hidden="true"></i><label for="formGroupExampleInput">CONTRASEÑA</label>
			<input type="password" class="form-control" id="exampleInputPassword1" pattern="[A-Za-z0-9_-]{1,12}" required placeholder="ingrese clave" name="clave" >
		    </div> 

		    <div class="opcion">
		   	<i class="fa fa-lock  fa-2x cust" aria-hidden="true"></i><label for="formGroupExampleInput">CONFIRMAR CONTRASEÑA</label>
			<input type="password" class="form-control" id="exampleInputPassword1" pattern="[A-Za-z0-9_-]{1,12}" required placeholder="ingrese clave" name="Rclave" >
		    </div>  
		    	</div>
		      <div class="card-footer">               
		    <button type="submit" value="ingresar2" class="btn btn-dark" >Registrarse</button> 
		    <button type="reset"  class="btn btn-dark">cancelar</button> 
		    <a href="intranet.php" class="btn btn-dark" role="button" aria-pressed="true">Listo</a>
			</div>
		</form>
		</div>
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
			</body>
</html>
