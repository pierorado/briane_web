<?php
require '../includes/funciones.php';
include "../includes/conexion.php";

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Inicio |noticias</title>
	<meta name="viewport"  content="width=device-width,user-scalable=no,initial-scale=1,maximum-scale=1.0,minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../css/estilosp.css">
	<link href="https://fonts.googleapis.com/css?family=Coda" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../fontawesome-free-5.0.13/web-fonts-with-css/css/fontawesome-all.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.min.css">
	<link rel="shortcut icon" type="image/x-icon" href="../img/ico_briane.ico">
</head>
<body >
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
			 		<li class="active2"><a href="../submenu/noticias.php" >NOTICIAS</a></li>
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
 		<section>
 			<div class="body-cont">
 			
			 	<div class="content-portada-news">
			 				<div class="card portada1">
			 				<div id="carouselExampleCaptions news" class="carousel slide" data-ride="carousel" style="">
						  
								  <div class="carousel-inner">
								  <?php
								  $i=1;
					 				 $consul1="SELECT * FROM noticia ORDER BY id_not DESC LIMIT 1  ";
						  		$resrelac=$conexion->query($consul1);

						  		$sqlimage=mysqli_query($conexion,$consul1);
							     $resimage=mysqli_num_rows($sqlimage);

						  		while ($corsl=mysqli_fetch_array($sqlimage)) {

					 				?>
								  	
								    <div class="carousel-items active">
								    	<div class="somb-item">

								      <img src="../img/<?php echo $corsl['foto']; ?>">
								      <div class="carousel-caption d-none d-md-block" >
								        <a href="newsone.php?id_not=<?php echo $corsl['id_not']; ?>"><h5><?php echo $corsl['titulo']; ?></h5></a>
								        </div>
								      </div>
								    </div>

								    <?php
						  		}

						  		?>
								   </div> 
						  
						 
							</div>

						</div>

						<div class="contenedor-noticias2" >

						 	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
							  
								  <div class="carousel-inner" >

									  	<?php
									  $i= 1;
						 		$consul="SELECT * from noticia where id_not <> (SELECT id_not from noticia order by id_not desc limit 0,1) ORDER BY id_not DESC";
							  		$resrelac=$conexion->query($consul);

							  		$sqlimage=mysqli_query($conexion,$consul);
								     $resimage=mysqli_num_rows($sqlimage);
								     

								     	# code...
								  
							  		while ($corsl=mysqli_fetch_array($sqlimage)) {



						 				?>
									  
									  	
								<div class="carousel-item <?php  if($i++ == 1 ){echo "active" ;} ?>"  >
									    	
									      <div class="card mb-3">
										  <div class="row no-gutters">
										    <div class="col-md-6">
										      <img src="../img/<?php echo $corsl['foto']; ?>" class="card-img" alt="...">
										    </div>
										    <div class="col-md-6">
										      <div class="card-body gener-news">
										        <a href="newsone.php?id_not=<?php echo $corsl['id_not']; ?>"><h5 class="card-title"><?php echo $corsl['titulo']; ?></h5></a>
										        <div class="gener-news-text">
										        <?php echo $corsl['noticias']; ?>
										        </div>
										        <p class="card-text"><small class="text-muted"><?php echo $corsl['fecha']; ?></small></p>
										      </div>
										    </div>
										  </div>
										</div>

									    </div>


									    <?php
									    
							  		}
							  		 
							  		?>


								  </div>
							  <a class="carousel-control-prev newicon1" href="#carouselExampleIndicators" role="button" data-slide="prev">
							  	<div class="cuadrado-prev">
							    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
							    <span class="sr-only">Previous</span>
							    </div>
							  </a>
							  <a class="carousel-control-next newicon1" href="#carouselExampleIndicators" role="button" data-slide="next">
							  	<div class="cuadrado-next">
							    <span class="carousel-control-next-icon" aria-hidden="true"></span>
							    <span class="sr-only">Next</span>
							    </div>
							  </a>
							</div>
						</div>
					</div>
					<aside>
		 				<div class="contenedor-ofertas" style="float: left;">
							 <div class="encabezado-noticia">
							 	<h1>Ofertas Laborales</h1>
							 </div>
							 <?php
							 	$i=1;

						  		 $consul="SELECT * FROM ofertas ORDER BY id_ofertas DESC limit 5  ";
						  		$resrelac=$conexion->query($consul);
						  		while ($not=$resrelac->fetch_array(MYSQLI_BOTH)) {
						  			?>
							 <div class="titulo-noticia">
							 	<div class="num_not">
							 		<h2><?php echo $i++?></h2>
							 	</div>
							 	<div class="texto_not">
							 	<a href="oferta2.php?id_ofertas=<?php echo $not['id_ofertas']; ?>"><h4><?php echo $not['puesto']; ?></h4></a>
							 	</div>
						  			
							 </div>
							 	<?php
						  		}

						  		?>
				 
				  		</div>

					    <div class="facebook-portada2">
					 	<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ftransportesbriane%2F%3Fref%3Dbr_tf%26epa%3DSEARCH_BOX&tabs=fb-page&width=295&height=130&small_header=false&adapt_container_width=false&hide_cover=false&show_facepile=false&appId=2664763606895323" width="295" height="130" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>

					    </div>


 					</aside>	
			</div>


 		</section>
	
	  		
	  		
	
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
		  						<label>TRANSPORTES  BRIANE  <br>Av.Elmer Faucett N° 5104 - Urb.Canta-Callao.</label>

		  					</div>
		  					<div class="pie_row_colum">
		  						<i class="fas fa-phone"></i>
		  						<label> (511)  574-06-76</label>
		  					</div>
		  					<div class="pie_row_colum">
		  						<i class="far fa-envelope"></i>
		  						<label>  info@briane.pe</label>
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
	</div>
	<script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="../assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>