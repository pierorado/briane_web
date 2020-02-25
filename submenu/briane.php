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
	<link rel="stylesheet" href="../css/jquery.mCustomScrollbar.css" />
	<script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="../js/jquery.mCustomScrollbar.concat.min.js"></script>
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
			 		
			 		<li class="active2"><a href="../submenu/briane.php" >BRIANE
			 			<span class="drop-icon">▾</span>
        				<label title="Toggle Drop-down" class="drop-icon" for="sm0">▾</label>
        				</a>
        				<input type="checkbox" id="sm0">
			 			<ul class="sub-menu">
			 				<li><a href="../submenu/briane.php#seccion1" >Misión,vision,valores</a></li>
			 				<li><a href="../submenu/briane.php#seccion2" >Historia</a></li>
			 				<li><a href="../submenu/briane.php#seccion3" >Cultura Briane</a></li>
			 				<li><a href="../submenu/briane.php#seccion4" >Certificaciones</a></li>
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
	  	<div class="informacion">
	  	<div class="parte1 row">
	  		<div class="seccion1BI col-md-5">
	  			
	  				<h2>Nosotros</h2>
	  				<h3></h3>
	  				<h5>Estamos siempre listos para brindarles  la mejores   alternativas    de     solución para atender     las   necesidades    de nuestros clientes;   nuestra   gente enfocada por mejorar nuestros procesos y hacer uso de las tecnologías más adecuadas; personas éticas y comprometidas con la seguridad  y el cuidado de nuestro medio ambiente.
					</h5>
					<p >El resultado es que somos uno de las principales empresa de transporte de carga del país, atendiendo los estándares más altos de calidad y seguridad que garantizan la ejecución exitosa de los proyectos de nuestros clientes.
					</p>
	  			
	  					
	  		</div>

	  		<div class="seccion1BD col-md-7">
	  			
	  			

	  			<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel"   >
					  <div class="carousel-inner"  >
					    <div class="carousel-item active">
					      <img src="../img/nosotros1.jpg" class="d-block w-100" alt="..." >
					    </div>
					    <div class="carousel-item">
					      <img src="../img/nosotros2.jpg" class="d-block w-100" alt="..." >
					    </div>
					    <div class="carousel-item">
					      <img src="../img/nosotros3.jpg" class="d-block w-100" alt="..." >
					    </div>
					    <div class="carousel-item">
					      <img src="../img/nosotros4.jpg" class="d-block w-100" alt="..." >
					    </div>
					    <div class="carousel-item">
					      <img src="../img/nosotros5.jpg" class="d-block w-100" alt="..." >
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
	  	<section class="parrafo" id="seccion1">
	  		
	  		<div class="briane_parte2">
	  			
	  			<img src="../img/mvv.jpg" class="img">
	  			
	  		</div>
	  		
	  	</section>
	  	<section class="parrafo" id="seccion2">
	  		
	  		<div class="informacion">
	  		<div class="historia row">
	  		<div class="seccion2BI col-md-5">
	  			
	  				<h2>Historia</h2>
	  				<h3></h3>
	  				<h5>En el transcurso de los años, Briane ha participado en los principales proyectos de consumo masivo, construcción y minería.
					</h5>
				<p>Nuestra historia se remonta al año 1982,pasando por una coyuntura social, política y economía inestable,nuestros  fundador  aposto  por  el  país, creando   la empresa especializada en el traslado de carga pesada en   el   puerto  del  Callao, fomentando   la    cultura del Siempre Listos entre sus colaboradores, practicando valores como la honestidad,compromiso y respeto, en la formación de choferes profesionales.Briane  comenzó con  2  camiones  y  tolvas  trasladando productos  de  consumo  masivo. Con mucho esfuerzo y entusiasmo   fue   diferenciándose  de  competencia  en base  a  disciplina , puntualidad  y  buen trato  al  cliente.Llegando  hasta  la  actualidad  en  tener  la  mayor  flota variada de semi tráiler y tolvas.En la actualidad contamos con mayor flota de camiones a Gas Natural apostando por el cuidado del medio ambiente.  

					</p>
	  			
	  					
	  		</div>
	  		
	  		<div class="seccion2BD col-md-7">
	  			
	  			
	  			
	  			<div class="historia-cronologia row">
			  
			  <div class="colum1 col-9">
			    <div class="history-crono-content tab-content" id="v-tabs-tabContent">



			    	 <?php
								  $i=1;
					 				 $consul1="SELECT * FROM history ORDER BY id_ht  ";
						  		$resrelac=$conexion->query($consul1);

						  		$sqlimage=mysqli_query($conexion,$consul1);
							     $resimage=mysqli_num_rows($sqlimage);

						  		while ($corsl=mysqli_fetch_array($sqlimage)) {

					 				?>
			      <div class="tab-pane fade show <?php  if($i++ == 1 ){echo "active" ;} ?>" id="v-tabs-<?php echo $corsl['id_ht']; ?>" role="tabpanel" aria-labelledby="v-tabs-<?php echo $corsl['id_ht']; ?>-tab">
			      	<img src="../img/sec_history/<?php echo $corsl['foto']; ?>"  >
			      	<p class="text">S<?php echo  nl2br($corsl['descripcion']); ?></p>

			      </div>

			       <?php
						  		}

						  		?>

			    </div>
			  </div>
			  <div class="colum2 col-3">
			  	<div class="history-form">
			    <div class="nav flex-column nav-tabs" id="v-tabs-tab" role="tablist" aria-orientation="vertical">

			    	<?php
								  $i=1;
					 				 $consul1="SELECT * FROM history ORDER BY id_ht  ";
						  		$resrelac=$conexion->query($consul1);

						  		$sqlimage=mysqli_query($conexion,$consul1);
							     $resimage=mysqli_num_rows($sqlimage);

						  		while ($corsl=mysqli_fetch_array($sqlimage)) {

					 				?>
			      <a class="nav-link <?php  if($i++ == 1 ){echo "active" ;} ?>" id="v-tabs-<?php echo $corsl['id_ht']; ?>-tab" data-toggle="pill" href="#v-tabs-<?php echo $corsl['id_ht']; ?>" role="tab" aria-controls="v-tabs-<?php echo $corsl['id_ht']; ?>" aria-selected="true"><?php echo $corsl['año']; ?></a>
			      	<?php
						  		}

						  		?>
			      
			    </div>
			  </div>
			</div>
			</div>
	  				  				
	  			
	  			

	  		</div>	

	  	</div>
	  	</div>
	  	</section>
	  	<section class="parrafo3" id="seccion3">
	  		<div class="informacion">
	
	  			<div class="seccion3BI">
	  				<h2>Cultura BRIANE</h2>
	  				<h3></h3>
	  				
					<p >Nos basamos aplicando en nuestro día a día trabajar con honestidad y el comportamiento ético son fundamentales.Nuestros códigos de ética son los impulsores de promover estos valores tanto entre nuestros colaboradores como ante nuestros clientes estratégicos.Esta manera, nos aseguramos que el trabajo se desarrolle con eficiencia y eficacia.
					</p>
	  			</div>
	  		
	  				
	 
	  				
	  			 </div>
	  		</div>
	  		
	  	</section>
	  	<section class="parrafo" id="seccion4">
	  		  		<div class="informacion">
	  		<div class="certification row">
	  		<div class="col-md-5">
	  			<div class="seccion2BI">
	  				<h2>Certificaciones</h2>
	  				<h3></h3>
			<p>Sustentamos nuestra eficiencia y eficacia a través de<br>nuestra certificación de calidad.</p>
	  			</div>
	  			<div class="seccion2BI">
	  				<h4>Certificación ISO 9001:2015</h4>
	  		
	  			<P>Certification of Quality Management Systems</P>
	  				  <a href=""><img src="../img/iso90.png" style="width: 100px; height: 100px;"></a>
	  				  <a href="https://documentcloud.adobe.com/link/track?uri=urn%3Aaaid%3Ascds%3AUS%3A71a30f9e-e575-4116-bc66-a321e8c4e5b7" class="btn btn-secondary btn-lg active" style="margin-left: 30px;" role="button" aria-pressed="true">ver más</a>
	  			</div>
	  					
	  		</div>
	  		<div class="seccion4BD col-md-7">
	  			
	  		
	  				
	  			<h2>Homologaciones de nuestros clientes</h2>
	  			<h3></h3>
	  			<P>Estamos preparados para pasar las diferentes auditorias de calidad, seguridad realizadas por diferentes empresas especializadas contratadas por nuestros clientes.<br>Estamos convencidos que para lograr un objetivo debemos de planificar, hacer, verificar y actuar.</P>
	  			<div class="homologacion">
	  				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					  <ol class="carousel-indicators">
					    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					   
					  </ol>
					  <div class="carousel-inner">
					    <div class="carousel-item active">
					    	<div class="pri_holaga_item">
					    	<div class="hologa_item ">
					    		<img src="../img/alicorp1.png" >
					    	</div>
					    	<div class="hologa_item ">
					    		<img src="../img/cusa1.png" >
					    	</div>
					    	<div class="hologa_item ">
					    		<img src="../img/unicon1.png" >
					    	</div>
					      </div>
					      
					       
					    </div>
					    <div class="carousel-item">
					    	<div class="pri_holaga_item" >
					    	<div class="hologa_item">
					    		<img src="../img/fernando1.png" >
					    	</div>
					    	<div class="hologa_item">
					    		<a href="https://documentcloud.adobe.com/link/track?uri=urn%3Aaaid%3Ascds%3AUS%3Acffa5a41-b786-4a73-af8f-ed87c9413f48" target="_blank"><img src="../img/redondos1.png" ></a>
					    	</div>
					    	<div class="hologa_item">
					    		<img src="../img/mixercon1.png" >
					    	</div>
					      </div>
					      
					      
					    </div>
					    
					  </div>
					 
					</div>
	  	
	  			</div>

	  				    			
	  		</div>		
	  	</div>
	  	</div>
	  	</section>
	  	
	  	</div>
			
	  		<a class="back-to-top"><i class="fas fa-arrow-circle-up"></i></a>
	</div>
	<footer>
	<div class="separador"></div>
	  			<div class="pie_body">
	  				<div class="piedpagina1">
	  					<img src="../img/logo01.png" >
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
		  						<label>TRANSPORTES  BRIANE  <br>Av.Elmer Faucett N° 5104 - Urb.Las Fresas-Callao.<br>R.U.C N° 20516185211</label>

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

	
	<script>
    (function($){
        $(window).on("load",function(){
            $(".colum2").mCustomScrollbar({
            	theme:"3d-thick"
            });
        });
    })(jQuery);
</script>
	<script type="text/javascript" src="../js/manta.js"></script>
	
	<script type="text/javascript" src="../assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>