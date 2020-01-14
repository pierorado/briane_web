<?php
require 'includes/funciones.php';
include "includes/conexion.php";

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Transportes Briane</title>
	<meta name="description"content="Transportes Briane (Supervan S.A.C.) es una empresa dedicada al transporte terrestre de carga en general, granel, contenedores y cisternas.">

<meta name="keywords"content="empresa de transporte, Briane transportes, Briane,camioneros,transportes de carga">
	<meta name="viewport"  content="width=device-width,user-scalable=no,initial-scale=1, maximum-scale=1,minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/estilosp.css">
	<link href="https://fonts.googleapis.com/css?family=Coda" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="fontawesome-free-5.0.13/web-fonts-with-css/css/fontawesome-all.min.css">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="shortcut icon" type="image/x-icon" href="img/ico_briane.ico">
	<link rel="stylesheet" type="text/css" href="css/lightbox.min.css">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
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
	
	<div class="banerPrincipal">
	<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
	  
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img src="https://www.briane.pe/img/portada2.jpg" class="d-block w-100" alt="...">
	      <div class="carousel-letters ">
        <h5 class="animated fadeInUp" style="animation-delay: 1s">CALIDAD EN EL SERVICIO</h5>
        
        <p class="animated fadeInUp" style="animation-delay: 2s"><a href="">ÚNETE AL EQUIPO BRIANE</a></p>
      </div>
	    </div>
	    <div class="carousel-item">
	      <img src="https://www.briane.pe/img/portada1.jpg" class="d-block w-100" alt="...">
	      <div class="carousel-letters">
        <h5 class="animated fadeInUp" style="animation-delay: 1s">CONTROL DE OPERACIONES</h5>
        
        <p class="animated fadeInUp" style="animation-delay: 2s"><a href="">ÚNETE AL EQUIPO BRIANE</a></p>
      </div>
	    </div>
	    <div class="carousel-item">
	      <img src="https://www.briane.pe/img/portada3.jpg" class="d-block w-100" alt="...">
	      <div class="carousel-letters">
        <h5 class="animated fadeInUp" style="animation-delay: 1s">JUNTOS CON NUESTRA COMUNIDAD</h5>
     
        <p class="animated fadeInUp" style="animation-delay: 2s"><a href="">ÚNETE AL EQUIPO BRIANE</a></p>
      </div>
	    </div>
	  </div>
	  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
	  	<div class="circulo">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
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
	</div>



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
						      <img src="img/maxima2.png" class="d-block w-100" alt="Transportes Briane">
						    </div>
						    <div class="carousel-item">
						      <img src="img/maxima3.png" class="d-block w-100" alt="Transportes Briane">
						    </div>
						    <div class="carousel-item">
						      <img src="img/maxima4.png" class="d-block w-100" alt="Transportes Briane">
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
			  
			  <div class="carousel-inner" >
			    <div class="carousel-item active" >
			    	<div class="gallery_item" >
			    	<a href="img/empresa1.jpeg" data-lightbox="mygallery"><img src="img/empresa1.jpeg" class="gallery_img"></a>	
			    	</div>
			    	<div class="gallery_item"  >
			    		<a href="img/empresa2.jpeg" data-lightbox="mygallery"><img src="img/empresa2.jpeg" class="gallery_img"></a>	
			    		
			    	</div>
			    	<div class="gallery_item"  >
			    		
			    		<a href="img/estandar1.jpeg" data-lightbox="mygallery"><img src="img/estandar1.jpeg" class="gallery_img"></a>	
			    	</div>
			      
			    </div>
			    <div class="carousel-item">
			      <div class="gallery_item"  >
			    		
			    		<a href="img/estandar2.jpeg" data-lightbox="mygallery"><img src="img/estandar2.jpeg" class="gallery_img"></a>	
							
			    	</div>
			    	<div class="gallery_item"  >
			    		
			    		<a href="img/estandar3.jpeg" data-lightbox="mygallery"><img src="img/estandar3.jpeg" class="gallery_img"></a>	
			    	</div>
			    	<div class="gallery_item"  >
			    		<img src="img/flota1.jpeg" data-toggle="modal" data-target="#zoom6">
			    	</div>
			    </div>
			    <div class="carousel-item">
			    <div class="gallery_item"  >
			    		
			    		<a href="img/galeria1.jpg" data-lightbox="mygallery"><img src="img/galeria1.jpg" class="gallery_img"></a>	
			    	</div>
			    	<div class="gallery_item"  >
			    		
			    		<a href="img/galeria2.jpg" data-lightbox="mygallery"><img src="img/galeria2.jpg" class="gallery_img"></a>	
			    	</div>
			    	<div class="gallery_item" >
			    		
			    		<a href="img/galeria3.jpg" data-lightbox="mygallery"><img src="img/galeria3.jpg" class="gallery_img"></a>	
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

		 <div class="contenedor-noticias">
		 <div class="encabezado-noticia">
		 	<h1>ÚLTIMAS NOTICIAS</h1>
		 </div>
		 <?php
		 	$i=1;

	  		 $consul="SELECT * FROM noticia ORDER BY id_not DESC LIMIT 6  ";
	  	
	  		$resrelac=$conexion->query($consul);
	  		while ($not=$resrelac->fetch_array(MYSQLI_BOTH)) {
	  			?>
		 <div class="titulo-noticia">
		 	<div class="num_not">
		 		<h2><?php echo $i++?></h2>
		 	</div>
		 	<div class="texto_not">
		 	<a href="submenu/newsone.php?id_not=<?php echo $not['id_not']; ?>"><h4><?php echo $not['titulo']; ?></h4></a>
		 	</div>
	  			
		 	</div>
		 	<?php
	  		}

	  		?>
		 
		  </div>

		 </section>

		 

	<div class="chat_principal">
		
		<div class="chat_body">
			<div class="chat_cont">
			<div class="box-chat-circulo"></div>
			<h5>Atención al cliente</h5>
             <form  method="post" autocomplete="off">

             	<div class="form-group">
				    <label >Nombres</label>
				    <input type="text" class="form-control" name="nombre" id="nombre" >
				  </div>
				  <div class="form-group">
				    <label >Apellidos</label>
				    <input type="text" class="form-control" name="apellido" id="apellido">
				  </div>
				  <div class="form-group">
				    <label >Correo</label>
				    <input type="email" class="form-control"  name="correo" id="correo">
				  </div>
				  <div class="form-group">
				    <label f>¿Como podemos ayudarte?</label>
				    <textarea class="form-control" rows="3" name="mensaje" id="mensaje"></textarea>
				  </div>
				  <div id="response"></div>
				  <button type="button" id="but_submit"  value="enviar" class="btn btn-danger" >Enviar</button>
				 	
				 	
			</form>
			</div>
		</div>
		<div class="chat-circulo" id="chat-circulo">
		<i class="fas fa-comment-alt"></i>
		</div>
	</div>

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
		<script type="text/javascript">
	  			$(document).ready(function(){
	  				$("#but_submit").click(function(){

	  					var nombre = $("#nombre").val().trim();
	  					var apellido = $("#apellido").val().trim();
	  					var correo = $("#correo").val().trim();
	  					var mensaje = $("#mensaje").val().trim();

	  					$.ajax({
	  						url:'enviar.php',
	  						type:'post',
	  						data:{
	  							"nombre":nombre,"apellido":apellido,"correo":correo,mensaje:"mensaje"},
	  							success:function(response){
	  								var msg = "";
	  								$("#response").html(response);

	  							}
	  						});



	  				});
	  			});


	  		</script>
		<script type="text/javascript" src="js/lightbox-plus-jquery.min.js"></script>
		<script type="text/javascript" src="js/manta.js"></script>
		<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>