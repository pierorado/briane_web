<?php
require '../includes/funciones.php';
include "../includes/conexion.php";


	  		if(isset($_GET['id_not'])) {
	  		 $consul="SELECT * FROM noticia WHERE id_not = '".$_GET['id_not']."'";
	  		$resrelac=$conexion->query($consul);
	  		while ($not=$resrelac->fetch_array(MYSQLI_BOTH)) {
	  			$fecha = new DateTime($not['fecha']);
		$fecha = $fecha->format("d-m-Y"); 
	  			
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $not['titulo']; ?></title>
	<meta name="viewport"  content="width=device-width,user-scalable=no,initial-scale=1,maximum-scale=1.0,minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../css/estilosp.css">
	<link href="https://fonts.googleapis.com/css?family=Coda" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../fontawesome-free-5.0.13/web-fonts-with-css/css/fontawesome-all.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.min.css">
	<link rel="shortcut icon" type="image/x-icon" href="../img/ico_briane.ico">

	<meta name="author" 					content="Briane">
	<meta property="og:locale" 				content="en_EN"/>
	<meta property="og:type" 				content="article"/>
	<meta property="og:title" 				content="<?php echo $not['titulo']; ?>"/>
	
	<meta property="og:url" 				content="http://mahcode.com/share_article/"/>
	<meta property="og:site_name" 			content="briane.pe"/>
	<meta property="article:publisher" 		content="https://www.facebook.com/transportesbriane/"/>
	<meta property="article:published_time" content="<?php echo $not['fecha']; ?>"/>
	<meta property="og:image" 				content="../img/<?php echo $not['foto']; ?>"/>
	  

	<meta name="twitter:title" 				content="<?php echo $not['titulo']; ?>"/>
	<meta name="twitter:image" 				content="../img/<?php echo $not['foto']; ?>"/>
	<meta name="twitter:site" 				content="@itsmahcode"/>
	<meta name="twitter:creator" 			content="@itsmahcode"/>
	<meta name="twitter:via" 				content="itsmahcode"/>
	<meta name="twitter:card" 				content="photo"/>
	<meta name="twitter:url" 				content="http://mahcode.com/share_article/"/>



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
 		<div class="body-cont">
			<div class="card content-portada-news-info">
					<h2><?php echo $not['titulo']; ?></h2>
 				<div class="card portada1">
	 				<div id="carouselExampleCaptions news" class="carousel slide" data-ride="carousel" style="">
				  
				  		<div class="carousel-inner">
						    <div class="carousel-item active">
						      <img src="../img/<?php echo $not['foto']; ?>">  
						    </div>
				   		</div> 
					</div>

				</div>
				
				<div class="newsome-date">
					<p style="color: #888888;">Actualizado el <?php echo $fecha; ?></p>
					<div class="share-buttons-row">
					<!--Facebook's Button -->
						<div class="share-fb"></div>
						<!--Twitter's Button -->
						<div class="share-twitter"></div>
						<!--Facebook's Button -->
					
				    </div>	
				</div>

				<div class="">
					<?php echo nl2br($not['noticias']); ?>	
				</div>
			
			</div>
			<aside>
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
				 	<a href="newsone.php?id_not=<?php echo $not['id_not']; ?>"><h4><?php echo $not['titulo']; ?></h4></a>
				 	</div>
			  			
				 </div>
				 	<?php
			  		}

			  		?>
				 
				  </div>
			</aside>
	 	</div>
			<?php
			  			}
					}
			  		?>
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
	<script type="text/javascript" src="../js/manta.js"></script>
	<script type="text/javascript" src="../assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>