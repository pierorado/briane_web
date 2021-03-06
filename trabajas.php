<?php
session_start();

require 'includes/funciones.php';
include "includes/conexion.php";


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Inicio |Briane</title>
	<meta name="viewport"  content="width=device-width,user-scalable=no,initial-scale=1,maximum-scale=1.0,minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/estilosp.css">
	<link href="https://fonts.googleapis.com/css?family=Coda" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="fontawesome-free-5.0.13/web-fonts-with-css/css/fontawesome-all.min.css">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="shortcut icon" type="image/x-icon" href="img/ico_briane.ico">
</head>
<body style="background-color: #F8F8F8">
 <div class="contenedor" >
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
	 				
			 		<li  ><a href="index.php" >VALOR AGREGADO</a></li>
			 		
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
			 				<li><a href="division.html#propuesta" >Nuetros Servicios</a></li>
			 				<li><a href="division.html#servicios" >Servicios Portuarios</a></li>
			 				<li><a href="division.html#operacion" >Operación Minera</a></li>
			 				<li><a href="division.html#ventajas" >Ventajas Competitivas</a></li>
			 			</ul>
			 		</li>
			 		<li><a href="estandares.html" >ESTANDARES DE GESTIÓN </a></li>
			 		<li class="active2"><a href="trabajas.php" >TRABAJA CON NOSOTROS
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


			<section class="parrafo"  id="propuesta">
  
		<div class="parte5">
		
		<img src="img/portada-trabaja.png" class="primero">
					
	    </div>
		</section>

			<section class="parrafo" id="seccion5">

				<div class="informacion">
					<div class="trabaja_content">
	  		<div class=" row">
	  		<div class="seccion6BI col-md-5">
	  			
	  				<h2>¿Porqué elegir BRIANE?</h2>
	  				<h3></h3>
	  				<h5>Profesional del Transporte</h5>
	  				
	  				<ul>
						<li>Por que ingresas a planillas desde le primer día.</li>
						<li>Movemos mayor carga que las competencia.</li>
						<li>Contamos con viáticos asegurados en cada jornada.</li>
						<li>Alto reconocimiento por tu esfuerzo generando atractivos  ingresos adicionales.</li>
						<li>Contamos con linea de carrera para poder asegurar tu crecimiento profesional.</li>
						<li>Capacitación constante.</li>
						<li>Mayores ingresos asegurados gracias a nuestro almacen que asegura la carga.</li>

					</ul>
	  			
	  					
	  		</div>
	  		<div class="seccion4BI col-md-5 offset-md-2">
	  			
	  			<h3></h3>
	  				<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel"   >
					  <div class="carousel-inner"  >
					    <div class="carousel-item active">
					      <img src="img/trabajador1.jpg" class="d-block w-100" alt="..." >
					    </div>
					    <div class="carousel-item">
					      <img src="img/trabajador2.jpg" class="d-block w-100" alt="..." >
					    </div>
					    <div class="carousel-item">
					      <img src="img/trabajador3.jpg" class="d-block w-100" alt="..." >
					    </div>
					    <div class="carousel-item">
					      <img src="img/trabajador4.jpg" class="d-block w-100" alt="..." >
					    </div>
					    
					  </div>
					  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
					  	<div class="circulo"   >
					    <span class="carousel-control-prev-icon"  aria-hidden="true" ></span>
					    <span class="sr-only">Previous</span>
					    </div>
					  </a>
					  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
					  	<div class="circulo"   >
					    <span class="carousel-control-next-icon" aria-hidden="true"></span>
					    <span class="sr-only">Next</span>
					    </div>
					  </a>
					</div>
	  				 				
	  			
	  			

	  		</div>		
	  	</div>
	  	</div>
	  	</div>
			</section>
			<section class="parrafo" id="seccion6">
				<div id="mapa"  >
				<div class="informacion">
					<div class="trabaja_content">
	  		<div class=" row">
	  		<div class="seccion6BI col-md-5">
	  			
	  				<h2>Juntos con nuestra Comunidad</h2>
	  				
	  				<h3></h3>
	  				<ul>
						<li>Somos consiente que para poder crecer debemos de vivir en comunidad.</li>
						<li>Desplegamos actividades en conjunto con la comunidad que permita<br> encontrar un equilibrio entre empresa y comunidad.</li>
						<li>Brindamos empleo formal para las comunidades donde nos encontramos.</li>
						<li>Nos capacitamos constantemente para poder desarrollar proyectos<br> con la comunidad.</li>

					</ul>
	  			
	  					
	  		</div>
	  		<div class="seccion4BI col-md-5 offset-md-2">
	  			
	  			<h3></h3>
	  			<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
					  <div class="carousel-inner">
					    <div class="carousel-item active" data-interval="10000">
					      <img src="img/trabajador5.jpg" class="d-block w-100" alt="..." >
					    </div>
					    <div class="carousel-item" data-interval="2000">
					     <img src="img/trabajador6.png" class="d-block w-100" alt="..." >
					    </div>
					    <div class="carousel-item">
					     <img src="img/trabajador7.jpg" class="d-block w-100" alt="..." >
					    </div>
					    <div class="carousel-item">
					     <img src="img/trabajador8.jpg" class="d-block w-100" alt="..." >
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
	  		</div>


	  	</div>

	  	</div>
	  	
			</section>
			<section class="parrafo" id="seccion8">
			<div class="informacion">
			<div class="laborales">
	  		<h2>Ofertas Laborales </h2>
	  		<h3></h3>
	  		<div class="portada-oferta">
	  		<div class="row">
	  		<div class="col-4">
	  			<h5>Puesto</h5>
	  		</div>	
	  		<div class="col">
	  			<h5>fechas de publicacion</h5>
	  		</div>	
	  		</div>
	  		</div>
	  			<?php 
	  			
	  			$consul=mysqli_query($conexion,"SELECT * FROM ofertas ORDER BY id_ofertas DESC");
	  			while ($not=mysqli_fetch_array($consul)) {

	  				$fecha = new DateTime($not['fecha']);
					$fecha = $fecha->format("d-m-Y"); 
					
	  				?>


	  			<div class="ofertas" >
	  				
	  				<div class="offert_puesto ">
	  				<h7><?php echo $not['puesto']; ?></h7>
	  				<p><?php echo $not['descripcion']; ?></p>
	  				</div>	
	  				<div class="offert_date">
	  				<h7><?php echo $fecha; ?></h7>
	  				</div>
	  				<div class="offert_button">
	  				<a href="submenu/oferta2.php?id_ofertas=<?php echo $not['id_ofertas']; ?>" class="btn btn-dark btn-lg active" role="button" aria-pressed="true">Oferta</a>
	  				</div>		
	  				
	  			</div>
	  				<?php
	  		}

	  		?>	
	  		
	  				
	  </div>
	  	</div>

		</section>
		<section class="parrafo" id="seccion7">
			<div class="informacion">
	  		<div class="formu_unete row">
	  			<div class="col-md-5">
	  				<h2>Únete a Nosotros  </h2>
	  				<h3></h3>
	  				
	  				<p>Buscamos tu talento. Si deseas ser parte de nuestro equipo.Envía tu currículum online si quieres trabajar:</p>
	  				</div>
	  			<div class="formu_works	col-md-7 ">
	  	<form class="form"  autocomplete="off" action="submenu/mail_offer.php" enctype="multipart/form-data" method="post">  
						  <div class="form-group">
						    <label for="validationTooltip01">Nombre</label>
						    <input type="text" name="nombre" class="form-control" id="Inombre"  >
							      
						  </div>

						  <div class="form-group">
						    <label for="validationTooltip02">E-mail</label>
						    <input type="text" name="email" class="form-control" id="Iemail"   >
						  </div>

						  <div class="form-group">
						    <label for="validationTooltip03">Telefono</label>
						    <input type="text" name="telefono" class="form-control" id="Itelefono" > 
						  </div>

						<div class="form-group">
					    <label for="validationTooltip04">Ciudad</label>
						    <input type="text" name="ciudad" class="form-control" id="Iciudad" >
					  </div>

					  	<div class="form-group">
					    <label for="validationTooltip05">Puesto de Trabajo</label>
						    <input type="text" name="puesto" class="form-control" id="Ipuesto">  
					  </div>
					  
					  <div class="form-group">
					    <label for="exampleFormControlFile1">Adjuntar CV</label>
					    <input type="file" name="file" class="form-control-file" id="Ifile" >
					  </div>
						<div id="response"></div>

						  <button type="button" id="but_submit" class="btn btn-dark">Enviar</button>
						  <button type="reset" name="cancelar" class="btn btn-dark">Borrar</button>
					</form>
	  			</div>
	  	
	  			
	  	</div>
	  	</div>
		</section>
	  		
	</div>
	
	<footer>
	<div class="separador"></div>
	  			<div class="pie_body">
	  				<div class="piedpagina1">
	  					<img src="img/logo01.png" >
	  				 <p>BRIANE® nace el 13 de junio de 1982 en Lima-Perú.<br> Iniciando operaciones trasladando carga en el puerto  <br> del Callao . Ofrecemos servicios de transporte  con <br>una variada flota de equipo y plataforma. </p>
	  				 
	  				 <div class="Copyright">
	  				 	<p>Copyright © 2018 BRIANE </p>	
	  				</div>
	  				</div>

	  				<div class="piedpagina2">
		  				 <h4>SIEMPRE LISTOS PARA SERVIRTE</h4>
		  				 <div class="pie_colum">
		  					<div class="pie_row_colum">
		  						<i class="fas fa-home"></i>
		  						<label>TRANSPORTES  BRIANE  <br>Av.Elmer Faucett N° 5104 - Urb.Canta-Callao.<br>R.U.C N° 20516185211</label>

		  					</div>
		  					<div class="pie_row_colum">
		  						<i class="fas fa-phone"></i>
		  						<label> (511)  574-06-76</label>
		  					</div>
		  					<div class="pie_row_colum">
		  						<i class="far fa-envelope"></i>
		  						<label>  info@supervan.pe<</label>
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

	  					var nombre = $("#Inombre").val().trim();
	  					var correo = $("#Iemail").val().trim();
	  					var telefono = $("#Itelefono").val().trim();
	  					var ciudad = $("#Iciudad").val().trim();
	  					var puesto= $("#Ipuesto").val().trim();
	  					var file = $("#Ifile");
	  					var formData = new FormData();
	  					var archivo = file[0].files;
	  					formData.append('file',files);
	  					$.ajax({
	  						url:'submenu/mail_offer.php',
	  						type:'post',
	  						data:{"telefono":telefono,"correo":correo,"ciudad":ciudad,"puesto":puesto,"nombre":nombre,formData},
	  						contentType: false,
            				processData: false,
	  							success:function(response){
	  								var msg = "";
	  								console.log(response);
	  								
	  								$("#response").html(response);

	  							}
	  						});



	  				});
	  			});


	  		</script>
	<script type="text/javascript" src="js/manta.js"></script>
	<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>