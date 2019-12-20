<?php

use PHPMailer\PHPMailer\PHPMailer;
if (isset($_POST['correo'])) {
	 require '../includes/funciones.php';
	include "../includes/conexion.php";
	$correo = mysqli_real_escape_string($conexion,$_POST['correo']);
	$res=mysqli_query($conexion,"SELECT idusuario FROM usuarios WHERE correo='$correo' ");
	$fila=mysqli_num_rows($res);

	if ($fila > 0) {
		$token="mnbvcxzlkjhgfdsapoiuytrewq1234567890";
		$token=str_shuffle($token);
		$token=substr($token,0,10);
$restoke=mysqli_query($conexion,"UPDATE usuarios SET token='$token',tokenExpire=DATE_ADD(NOW(),INTERVAL 5 MINUTE)WHERE correo='$correo'");

		require_once "../PHPMailer/src/PHPMailer.php";
		require_once "../PHPMailer/src/Exception.php";
		require_once "../PHPMailer/src/SMTP.php";
		require_once "../PHPMailer/src/OAuth.php";

		$mail = new PHPMailer();
	    $mail->isSMTP(); 
		$mail->SMTPDebug=0;
		$mail->Host='smtp.gmail.com';
		$mail->Port =587;
		$mail->SMTPSecure='tls';
		$mail->SMTPAuth= true; 
		$mail->Username ='juanradorado@gmail.com';
		$mail->Password ='pierolamuerte.com';
		$mail->CharSet = 'UTF-8';
			$mail->setFrom('juanradorado@gmail.com','juanradorado@gmail.com');
		$mail->addAddress($correo);
		$mail->Subject='Código de recuperación de tu cuenta Briane';
		$mail->isHTML(true);
		$mail->Body="
		<div class='cont-mensaje' style='width:500px ;margin: 0;padding: 30px 30px 30px 30px;border-style: ridge; border-width: 4px; border-color: #E20613;background:#EDF0F3;display:block;
margin:auto;'>

		<img src='http://www.briane.pe/img/logo01.png' style='display:block;margin:auto;'>
			<h2>Hemos recibido una solicitud para modificar tú contraseña Briane.</h2><br></br> Restablezca su contraseña de inmediato utilizando este enlace seguro.No olvide que solo tiene 1 intento:

			<a href='http://briane.pe/submenu/intra_resetContra.php?correo=$correo&token=$token'>
			http://briane.pe/submenu/intra_resetContra.php?correo=$correo&token=$token</a><br></br><br></br>
			Si tiene alguna pregunta, comuníquese con Soporte para miembros (elio.petit@supervan.pe).<br>
		</div>";
		
		if ($mail->send()) {
			exit(json_encode(array("status" => 1,"msg"=>"<div class='alert alert-success' role='alert'>Por favor revisa tu correo</div>"  )));
		}
		else {
			exit(json_encode(array("status" => 0,"msg"=>"<div class='alert alert-danger' role='alert'>intente de nuevo</div>"  )));
		}
		
	  
	}else
		exit(json_encode(array("status" => 0,"msg"=>"<div class='alert alert-danger' role='alert'>correo invalido</div>" )));
	
}

	
	







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
 				<h5>Recuperar Contraseña</h5>
 			</div>
 			<div class="card-body">	
 			
	  <div class="form-group">
	    <label for="exampleInputEmail1">Correo Electronico</label>


	    <input type="email" class="form-control" id="correo" aria-describedby="emailHelp">
	    
	  </div>
	   <br>
	  <div id="response"></div>
	  </div>
	  <div class="card-footer">
	  <button type="button" class="btn btn-dark">Enviar</button>
	 
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
	  		<script type="text/javascript">
	  			var correo =$("#correo");

	  			$(document).ready(function(){
	  				$('.btn-dark').on('click',function(){
	  					if (correo.val()!="") {
	  						correo.css('border','1px solid green');
	  						$.ajax({
	  							url:'intra_recupContra.php',
	  							method:'POST',
	  							dataType:'json',
	  							data:{
	  								correo:correo.val()

	  							},success:function(response){
	  								if (!response.success) {
	  									
	  									
                           				
                           			
								            $("#response").html(response.msg);
								       
	  									
	  									
	  								}else {
	  									
	  									$("#response").html(response.msg);
	  									
	  									
                            
	  								}
	  								
	  							}
	  						});
	  					}else{
	  						correo.css('border','1px solid red');
	  					}
	  				});
	  			});


	  		</script>
			<script type="text/javascript" src="../js/manta.js"></script>
			<script type="text/javascript" src="../assets/bootstrap/js/bootstrap.min.js"></script>
			</body>
</html>