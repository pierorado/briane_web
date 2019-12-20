<?php
	if (isset($_GET["correo"]) && isset($_GET["token"])) {
		require '../includes/funciones.php';
		include '../includes/conexion.php';

		$correo = mysqli_real_escape_string($conexion,$_GET["correo"]);
		$token = mysqli_real_escape_string($conexion,$_GET["token"]);
		
		$resrest=mysqli_query($conexion,"SELECT idusuario from usuarios where correo='$correo' and token='$token' and token<>'' and tokenExpire > NOW()");


		$fila=mysqli_num_rows($resrest);
		if ($fila>0) {

				$cons = array('b','c','d','f','g','h','j','k','l',  
                  'm','n','p','r','s','t','v','w','x','y','z');
    $voca = array('A','E','I','O','U');
    $num = array('1','2','3','4','5');
    
    $length = 6;
    $max = $length/2;
    $password = '';
    for($i=1;$i<=$max;$i++){
        $password .= $cons[rand(0,count($cons)-1)];
        $password .= $voca[rand(0,count($voca)-1)];
       $password .= $num[rand(0,count($num)-1)];
    }

			//$mayuscula="ABCDEFGHIJKMNPQRSTUVWXYZ";
			//$minuscula="mnbvcxzlkjhgfdsapoiuytrewq";
			//$numeros=range(0,9);
			//$str="mnbvcxzlkjhgfdsapoiuytrewqQWERTYUIOPASDFGHJKLÑZXCVBNM1234567890";
			//$str=substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 8);
		//$str=str_shuffle($str);
		//$str=substr($str,0,8);
		//$pass=sha1($str);

	$resrest2=mysqli_query($conexion,"UPDATE usuarios SET  token='' ,clave='$password' where correo='$correo'");		
		
		
		}else{
			 echo '<script language="javascript">alert("tiempo expirado intentelo denuevo");</script>';
			 echo '<script language="javascript">location.href="intranet.php"</script>';

		}
	}else{
		header("location:intranet.php");
		exit();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Briane</title>
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
			 			<li><a href="http://briane.pe/Osticket/upload/index.php"target="_blank">TICKETS</a></li>
			 			</ul>
			 		</li>
	 	</ul>
	 	
	  </nav> 
	</header>
			

 		<div id="formulario-intranet">	
 		<div class="content-intranet">
 		<div class="card">
 			<div class="card-header text-white bg-danger  mb-3">
 				<h5>Código de seguridad</h5>
 			</div>
 			<div class="card-body">	
 			
	
	    <label>Introduce el siguiente código para acceder a la Intranet,no olvide  modificar su contraseña. </label>

         <h1><span class="badge badge-secondary"><?php echo "$password"; ?></span></h1>
	   
	    
	
	  </div>
	  <div class="card-footer">
	  <a href="intranet.php" class="btn btn-secondary btn-lg " role="button" aria-pressed="true">Ingresar</a>
	  
	</div>
	    
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
	  			</div>
	  			
	
	  		</footer>
	  		<script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
	  		
			<script type="text/javascript" src="../js/manta.js"></script>
			<script type="text/javascript" src="../assets/bootstrap/js/bootstrap.min.js"></script>
			</body>
</html>