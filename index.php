<?php
require 'includes/funciones.php';
include "includes/conexion.php";

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Briane</title>
	<meta name="description"content="TRANSPORTES BRIANE estamos orientando todos nuestros esfuerzos en brindarle un servicio de calidad en todos nuestros servicios,trabajamos con la consigna de ofrecer soluciones a la medida de nuestros clientes para satisfacer las necesidades de transporte terreste y carga pesada a nivel nacional.">

<meta name="keywords"content="empresa de transporte, Briane transportes, Briane,camioneros,transportes de carga">
	<meta name="viewport"  content="width=device-width,user-scalable=no,initial-scale=1, maximum-scale=1,minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/estilosp.css">
	<link href="https://fonts.googleapis.com/css?family=Coda" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="fontawesome-free-5.0.13/web-fonts-with-css/css/fontawesome-all.min.css">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="shortcut icon" type="image/x-icon" href="img/ico_briane.ico">
</head>
<body style="background-color: #F8F8F8">
	<header>		 
	 		<nav id="menu1">
	 	
	 		
	 				<div id="toggle-menu">
	 					<img class="logo2" src="img/logo02.png">
	 					
	 					<label for="tm" ><span class="drop-icon">▾</span></label>
	 				
	 				</div>
	 				<input type="checkbox" id="tm">
	 			<ul class="main-menu clearfix">
	 				<div class="logo22">
	 					<img  src="img/logo02.png">
	 				</div>
	 				
			 		<li  class="active2"><a href="index.php" >VALOR AGREGADO</a></li>
			 		
			 		<li><a href="submenu/briane.html" >BRIANE
			 			<span class="drop-icon">▾</span>
        				<label title="Toggle Drop-down" class="drop-icon" for="sm0">▾</label>
        				</a>
        				<input type="checkbox" id="sm0">
			 			<ul class="sub-menu">
			 				<li><a href="submenu/briane.html#seccion1" >Misión,vision,valores</a></li>
			 				<li><a href="submenu/briane.html#seccion2" >Historia</a></li>
			 				<li><a href="submenu/briane.html#seccion3" >Cultura Briane</a></li>
			 				<li><a href="submenu/briane.html#seccion4" >Certificaciones</a></li>
			 			</ul>
			 		</li>

			 		<li ><a href="division.html">SERVICIOS
			 			<span class="drop-icon">▾</span>
        				<label title="Toggle Drop-down" class="drop-icon" for="sm1">▾</label>
        				</a>
        				<input type="checkbox" id="sm1" >
			 			<ul class="sub-menu">
			 				<li><a href="division.html#propuesta" >Nuetra propuesta de valor</a></li>
			 				<li><a href="division.html#servicios" >SERVICIOS PORTUARIOS</a></li>
			 				<li><a href="division.html#construccion" >CONSTRUCCIÓN</a></li>
			 				<li><a href="division.html#mineria" >MINERÍA Y ENERGÍA</a></li>
			 				<li><a href="division.html#proyectos" >PROYECTOS</a></li>
			 			</ul>
			 		</li>
			 		<li><a href="estandares.html" >ESTANDARES DE GESTIÓN </a></li>
			 		<li ><a href="trabajas.php" >TRABAJA CON NOSOTROS
			 			<span class="drop-icon">▾</span>
        				<label title="Toggle Drop-down" class="drop-icon" for="sm2">▾</label>
        			</a>
        				<input type="checkbox" id="sm2">
			 			<ul class="sub-menu">
			 				<li><a href="trabajas.php#seccion5" >¿Porqué elegir BRIANE?</a></li>
			 				<li><a href="trabajas.php#seccion6" >Nuestra Comunidad</a></li>
			 				<li><a href="trabajas.php#seccion7">Únete a Nosotros</a></li>
			 			</ul>
			 		</li>
			 		<li><a href="submenu/noticias.php" >NOTICIAS</a></li>
			 		<li><a href="contactos.html" >CONTÁCTENOS</a></li>
			 		<li ><a href="#" >MÁS
			 			<span class="drop-icon">▾</span>
        				<label title="Toggle Drop-down" class="drop-icon" for="sm3">▾</label>
        			</a>
        				<input type="checkbox" id="sm3">
			 			<ul class="sub-menu">
			 				<li><a href="submenu/intranet.php" >INTRANET</a></li>
			 			<li><a href="http://briane.pe/Osticket/upload/index.php"target="_blank">TICKETS</a></li>
			 			</ul>
			 		</li>
	 	</ul>
	 	
	  </nav> 
	</header>
	<section class="banner">
		<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel"   >
					  <div class="carousel-inner"  >
					    <div class="carousel-item active">
					      <img src="img/portada2.png" class="d-block w-100" alt="..." >
					    </div>
					    <div class="carousel-item">
					      <img src="img/portada1.png" class="d-block w-100" alt="..." >
					    </div>
					    <div class="carousel-item">
					      <img src="img/portada3.png" class="d-block w-100" alt="..." >
					    </div>
					  </div>
					  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
					  	<div class="circulo">
					    <span class="carousel-control-prev-icon"  aria-hidden="true"></span>
					    <span class="sr-only">Previous</span>
					    </div>
					  </a>
					  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
					  	<div class="circulo">
					    <span class="carousel-control-next-icon" aria-hidden="true"></span>
					    <span class="sr-only">Next</span>
					    </div>
					  </a>
		</div>
		<div class ="img_valor1">
			<div class="val11">
				<a href="submenu/unete.html"><img src="img/unete.png" ></a>
			</div>
			<div class="val22">
				<img src="img/valor11.png" >
			</div>
	     	
	  	 	
	  	 	
	  	 	
	  	 </div>

	</section>	
	 	<div id="pestañas">
 	 <div class="box">
    	<ul>
    		<li id="tab-uno"><h4>SOLUCIÓN PERFECTA</h4> </li>
    		<li id="tab-dos"><h4>MONITOREO SATELITAL</h4></li>
    		<li id="tab-tres"><h4>MAXIMA SEGURIDAD</h4></li>
    		<li id="tab-cuatro"><h4>UNIVERSIDAD BRIANE</h4></li>
    		<li id="tab-cinco"><h4>PEDIDO EN LINEA </h4></li>
    		<li id="tab-cinco"><a href="http://briane.pe/Osticket/upload/index.php"target="_blank"><h4>TICKETS</h4></a></li>
    	</ul>
    	<div class="content">
    		<div id="tab-uno-content-box" class="hide active">
    			<div class="pestaña_uno_izquierda">
    				<img src="img/solu1.png" >
    				<div class="pestaña_izquierda_1">
    					<h4>LOGÍSTICA DE VANGUARDÍA</h4>

    				</div>
    				<p>Nos esforzamos en brindar soluciones de valor  que permitan al cliente, eliminar o minimizar sus problemas gracias a nuestro talento humano altamente especializado, desplegando las mejores prácticas en beneficios de los clientes, proveedores, comunidad y nuestro medio ambiente. Porque estamos convencidos que el éxito de nuestros clientes también es nuestro éxito.</p>
    				<h4>TENEMOS UNA FLOTA CONFIABLE</h4>
    				<h4>MANTENIMIENTO 24-7</h4>
    			</div>
    			<div class="pestaña_uno_derecha">

	    				<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
					  <div class="carousel-inner">
					    <div class="carousel-item active" data-interval="10000">
					      <img src="img/solu2.png" class="d-block w-100" alt="..." >
					    </div>
					    <div class="carousel-item" data-interval="2000">
					     <img src="img/solu3.png" class="d-block w-100" alt="..." >
					    </div>
					    <div class="carousel-item">
					     <img src="img/solu4.png" class="d-block w-100" alt="..." >
					    </div>
					    <div class="carousel-item">
					     <img src="img/solu5.png" class="d-block w-100" alt="..." >
					    </div>
					    <div class="carousel-item">
					     <img src="img/solu6.png" class="d-block w-100" alt="..." >
					    </div>
					    <div class="carousel-item">
					     <img src="img/solu7.png" class="d-block w-100" alt="..." >
					    </div>
					  </div>
					  <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
					    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
					    <span class="sr-only">Previous</span>
					  </a>
					  <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
					    <span class="carousel-control-next-icon" aria-hidden="true"></span>
					    <span class="sr-only">Next</span>
					  </a>
					</div>    				
    			</div>
    		</div>
    		
    		<div id="tab-dos-content-box" class="hide">

    			<div class="pestaña_dos_izquierda">
    				
    				<img src="img/monitoreo.png" >
    				
    			</div>
    			<div class="pestaña_dos_derecha">

    				<img src="img/moni2.png" >
    				<dl  >
    					<dd><p ><i class="fas fa-circle"></i>Servicio de monitoreo de unidad 24 horas, los 365 del año.</p></dd>
    					<dd><p><i class="fas fa-circle"></i>Transmisión de video y toma de fotos en las rutas.</p></dd>
    					<dd><p><i class="fas fa-circle"></i>Personal entrenado ante cualquier situación (Fallas mecánicas, Accidentes, Incidentes, Robos )</p></dd>
    				</dl>
    			</div>

    		</div>
    		
    		<div id="tab-tres-content-box" class="hide">
    			<div class="pestaña_tres_izquierda" >
    				<img src="img/max1.png" >
    				
    				<p>Enfocados por el bienestar de nuestros  colaboradores,desarrollado en nuestro tres pilares tales como la Salud, entrenamiento constante y la seguridad en su ADN, hacen que nuestros colaboradores brinden un servicio efiente y eficaz.</p>
    				
    			</div>
    			
    				<div class="pestaña_tres_derecha">

		    				<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
						  <div class="carousel-inner">
						    <div class="carousel-item active">
						      <img src="img/maxima2.png" class="d-block w-100" alt="...">
						    </div>
						    <div class="carousel-item">
						      <img src="img/maxima3.png" class="d-block w-100" alt="...">
						    </div>
						    <div class="carousel-item">
						      <img src="img/maxima4.png" class="d-block w-100" alt="...">
						    </div>
						  </div>
						  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
						    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
						    <span class="sr-only">Previous</span>
						  </a>
						  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
						    <span class="carousel-control-next-icon" aria-hidden="true"></span>
						    <span class="sr-only">Next</span>
						  	</a>
							</div>
    				</div>
    		</div>
    		
    		<div id="tab-cuatro-content-box" class="hide">
    			<div class="pestaña_cuatro_derecha">
    				<img src="img/academia.png  ">
    			</div>
   	
    		</div>

    		<div id="tab-cinco-content-box" class="hide">
    			<div class="pestaña_cinco_derecha">
    				
    				<form class="was-validated" method="post" action="cotiza.php" novalidate>
		  <div class="form-row">
		    <div class="col-md-4 mb-3">
		      <label for="validationTooltip01">Asunto:</label>
		      <input type="text" class="form-control" id="validationTooltip01" name="asunto2" placeholder="Introducir asunto"  required>
		      <div class="valid-tooltip">
		        ¡Se ve bien!
		      </div>
		    </div>
		    <div class="col-md-4 mb-3">
		      <label for="validationTooltip02">Empresa:</label>
		      <input type="text" class="form-control" id="validationTooltip02" name="empresa" placeholder="Introducir empresa"  required>
		      <div class="valid-tooltip">
		        ¡Se ve bien!
		      </div>
		    </div>
		   <div class="col-md-4 mb-3">
		      <label for="validationTooltip03">Telefono:</label>
		      <input type="text" class="form-control" id="validationTooltip03" name="telefono" placeholder="Introducir Telefono"  required>
		      <div class="valid-tooltip">
		        ¡Se ve bien!
		      </div>
		    </div>
		  </div>
		  <div class="form-row">
		    <div class="col-md-4 mb-3">
		      <label for="validationTooltip01">Correo electrónico:</label>
		      <input type="text" class="form-control" id="validationTooltip01" name="correo" placeholder="Introducir correo electronico"  required>
		      <div class="valid-tooltip">
		        ¡Se ve bien!
		      </div>
		    </div>
		    <div class="col-md-4 mb-3">
		      <label for="validationTooltip02">Dirección del trabajo:</label>
		      <input type="text" class="form-control" id="validationTooltip02" name="direccion" placeholder="Introducir dirección"  required>
		      <div class="valid-tooltip">
		        ¡Se ve bien!
		      </div>
		    </div>
		   <div class="col-md-4 mb-3">
		      <label for="validationTooltip03">Ciudad:</label>
		      <input type="text" class="form-control" id="validationTooltip03" name="ciudad" placeholder="Introducir ciudad"  required>
		      <div class="valid-tooltip">
		        ¡Se ve bien!
		      </div>
		    </div>
		  </div>
		<div class="form-row">
		    <div class="col-md-4 mb-3">
		      <label for="validationTooltip01">Puesto:</label>
		      <input type="text" class="form-control" id="validationTooltip01" name="asunto2" placeholder="Introducir asunto"  required>
		      <div class="valid-tooltip">
		        ¡Se ve bien!
		      </div>
		    </div>
		    <div class="col-md-4 mb-3">
		      <label for="validationTooltip02">RUC:</label>
		      <input type="text" class="form-control" id="validationTooltip02" name="empresa" placeholder="Introducir empresa"  required>
		      <div class="valid-tooltip">
		        ¡Se ve bien!
		      </div>
		    </div>
		   <div class="col-md-4 mb-3">
		      <label for="validationTooltip03">Colocar su link de su web corporativa:</label>
		      <input type="text" class="form-control" id="validationTooltip03" name="telefono" placeholder="Introducir Telefono"  required>
		      <div class="valid-tooltip">
		        ¡Se ve bien!
		      </div>
		    </div>

		  </div>
			  <div class="col-md-10 mb-3">
			    <label for="validationTextarea">Mensaje:</label>
			    <textarea class="form-control is-invalid" id="validationTextarea" name="mensaje" placeholder="Introducir mensaje" required></textarea>
			   
			  </div>
			  
			  <button class="btn btn-dark" type="submit">Enviar</button>
			</form>
							
		    			</div>
		    		</div>
		    	</div>
		    </div>



		 </div>

		 <section id= "novedades">

		 <div class="facebook-portada">
		 	<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ftransportesbriane%2F&tabs=timeline&width=350&height=590&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=false&appId=202238220667084" width="350" height="590"  scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>

		 </div>

		 <div class="contenedor-galeria">
		 	<div class="encabezado-galeria">
		 	<h2>GALERIA DE FOTOS</h2>
		 	</div>
		 	
		 	 <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="">
			  <ol class="carousel-indicators">
			    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			  </ol>
			  <div class="carousel-inner" >
			    <div class="carousel-item active" >
			    	<div class="imagen1" style=" width: 250px; height: 150px;margin-left:20px; margin-top:20px;" >
			    	<img src="img/empresa1.jpeg" data-toggle="modal" data-target="#zoom1">	
			    	</div>
			    	<div class="imagen2" style=" width: 250px; height: 150px;margin-top:10px;margin-left:20px; " >
			    		<img src="img/empresa2.jpeg" data-toggle="modal" data-target="#zoom2">
			    	</div>
			    	<div class="imagen3" style=" width: 250px; height: 150px;margin-top:10px;margin-left:20px; " >
			    		<img src="img/estandar1.jpeg" data-toggle="modal" data-target="#zoom3">
			    	</div>
			      
			    </div>
			    <div class="carousel-item">
			      <div class="imagen4" style=" width: 250px; height: 150px;margin-left:20px; margin-top:20px;" >
			    		<img src="img/estandar2.jpeg" data-toggle="modal" data-target="#zoom4">
			    		<!-- Modal -->
							
			    	</div>
			    	<div class="imagen5" style=" width: 250px; height: 150px;margin-top:10px;margin-left:20px; " >
			    		<img src="img/estandar3.jpeg" data-toggle="modal" data-target="#zoom5">
			    	</div>
			    	<div class="imagen6" style=" width: 250px; height: 150px;margin-top:10px;margin-left:20px; " >
			    		<img src="img/flota1.jpeg" data-toggle="modal" data-target="#zoom6">
			    	</div>
			    </div>
			    <div class="carousel-item">
			    <div class="imagen7" style=" width: 250px; height: 150px;margin-left:20px; margin-top:20px;" >
			    		<img src="img/galeria1.jpg" data-toggle="modal" data-target="#zoom7">
			    	</div>
			    	<div class="imagen8" style=" width: 250px; height: 150px;margin-top:10px;margin-left:20px; " >
			    		<img src="img/galeria2.jpg" data-toggle="modal" data-target="#zoom8">
			    	</div>
			    	<div class="imagen9" style=" width: 250px; height: 150px;margin-top:10px;margin-left:20px; " >
			    		<img src="img/galeria3.jpg" data-toggle="modal" data-target="#zoom9">
			    	</div>
			    </div>
			  </div>
			  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
		</div>
		 </div>


			<div id="zoom1" class="modal fade" role="dialog">
										  <div class="modal-dialog">
										    <!-- Modal content-->
										    <div class="modal-content" style="z-index: 1000;">
										      <div class="modal-header">
										        <button type="button" class="close" data-dismiss="modal">&times;</button> 
										      </div>
										      <div class="modal-body" style="">
										       <img src="img/empresa1.jpeg" style="width: 100% ;">
										      </div>
										    </div>
										  </div>
										</div>

			<div id="zoom2" class="modal fade" role="dialog">
										  <div class="modal-dialog">
										    <!-- Modal content-->
										    <div class="modal-content" style="z-index: 1000;">
										      <div class="modal-header">
										        <button type="button" class="close" data-dismiss="modal">&times;</button> 
										      </div>
										      <div class="modal-body" style="">
										       <img src="img/empresa2.jpeg" style="width: 100% ;">
										      </div>
										    </div>
										  </div>
										</div>

			<div id="zoom3" class="modal fade" role="dialog">
										  <div class="modal-dialog">
										    <!-- Modal content-->
										    <div class="modal-content" style="z-index: 1000;">
										      <div class="modal-header">
										        <button type="button" class="close" data-dismiss="modal">&times;</button> 
										      </div>
										      <div class="modal-body" style="">
										       <img src="img/estandar1.jpeg" style="width: 100% ;">
										      </div>
										    </div>
										  </div>
										</div>

					 <div id="zoom4" class="modal fade" role="dialog">
										  <div class="modal-dialog">
										    <!-- Modal content-->
										    <div class="modal-content" style="z-index: 1000;">
										      <div class="modal-header">
										        <button type="button" class="close" data-dismiss="modal">&times;</button> 
										      </div>
										      <div class="modal-body" style="">
										       <img src="img/estandar2.jpeg" style="width: 100% ;">
										      </div>
										    </div>
										  </div>
										</div>

					 <div id="zoom5" class="modal fade" role="dialog">
										  <div class="modal-dialog">
										    <!-- Modal content-->
										    <div class="modal-content" style="z-index: 1000;">
										      <div class="modal-header">
										        <button type="button" class="close" data-dismiss="modal">&times;</button> 
										      </div>
										      <div class="modal-body" style="">
										       <img src="img/estandar3.jpeg" style="width: 100% ;">
										      </div>
										    </div>
										  </div>
										</div>

						<div id="zoom6" class="modal fade" role="dialog">
										  <div class="modal-dialog">
										    <!-- Modal content-->
										    <div class="modal-content" style="z-index: 1000;">
										      <div class="modal-header">
										        <button type="button" class="close" data-dismiss="modal">&times;</button> 
										      </div>
										      <div class="modal-body" style="">
										       <img src="img/flota1.jpeg" style="width: 100% ;">
										      </div>
										    </div>
										  </div>
										</div>

						<div id="zoom7" class="modal fade" role="dialog">
										  <div class="modal-dialog">
										    <!-- Modal content-->
										    <div class="modal-content" style="z-index: 1000;">
										      <div class="modal-header">
										        <button type="button" class="close" data-dismiss="modal">&times;</button> 
										      </div>
										      <div class="modal-body" style="">
										       <img src="img/galeria1.jpg" style="width: 100% ;">
										      </div>
										    </div>
										  </div>
										</div>
						<div id="zoom8" class="modal fade" role="dialog">
										  <div class="modal-dialog">
										    <!-- Modal content-->
										    <div class="modal-content" style="z-index: 1000;">
										      <div class="modal-header">
										        <button type="button" class="close" data-dismiss="modal">&times;</button> 
										      </div>
										      <div class="modal-body" style="">
										       <img src="img/galeria2.jpg" style="width: 100% ;">
										      </div>
										    </div>
										  </div>
										</div>

						<div id="zoom9" class="modal fade" role="dialog">
										  <div class="modal-dialog">
										    <!-- Modal content-->
										    <div class="modal-content" style="z-index: 1000;">
										      <div class="modal-header">
										        <button type="button" class="close" data-dismiss="modal">&times;</button> 
										      </div>
										      <div class="modal-body" style="">
										       <img src="img/galeria3.jpg" style="width: 100% ;">
										      </div>
										    </div>
										  </div>
										</div>


		 <div class="contenedor-noticias">
		 <div class="encabezado-noticia">
		 	<h1>LO MÁS LEIDO</h1>
		 </div>
		 <?php
	  		 $consul="SELECT * FROM noticia ORDER BY id_not DESC";
	  		$resrelac=$conexion->query($consul);
	  		while ($not=$resrelac->fetch_array(MYSQLI_BOTH)) {
	  			?>
		 <div class="titulo-noticia">
		 	<a href="submenu/noticias.php#noticia_<?php echo $not['idnot']; ?>"><h4><?php echo $not['titulo']; ?></h4></a>
		 	
	  			<?php echo $not['fecha']; ?>
		 	</div>
		 	<?php
	  		}

	  		?>
		 
		  </div>

		 </section>

	<a class="back-to-top"><i class="fas fa-arrow-circle-up"></i></a>
	



	
			<footer>
				<div class="separador"></div>
	  			<div class="pie_body">
	  				<div class="piedpagina1">
	  					<img src="img/logo01.png" >
	  				<p>BRIANE® nace en 1980 en  Lima-Perú. Iniciando operaciones trasladando carga en el puerto  del<br>Callao . Ofrecemos servicios de transporte  con <br>una variada flota de equipo y plataforma. </p>
	  				 
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
		  					<div class="pie_row_colum" >
		  						<i class="fas fa-phone"></i>
		  						<label>(511)   574-06-76</label>
		  					</div>
		  					<div class="pie_row_colum">
		  						<i class="far fa-envelope"></i>
		  						<label> info@supervan.pe</label>
		  					</div>
		  					
		  				</div>
	  				</div>

	  				<div class="piedpagina3">
	  					<h4>ENCUÉNTRANOS EN LAS REDES SOCIALES</h4>
	  					<div class="facebook1">
	  				   <a href="https://www.facebook.com/transportesbriane/" ><i class="fab fa-facebook-f" style="" ></i></a>
	  				   </div> 
	  				   <div class="redes">
	  				   <img src="img/youtube.png" class="youtube" style="width: 35px;height: 35px;">
	  				  <img src="img/linkedin.png" class="linkedin" style="width: 35px;height: 35px;margin-left: 10px;">
	  				  </div>
	  				</div>
	  				
	  			</div>		
	  		</footer>

		<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="js/manta.js"></script>
		<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>