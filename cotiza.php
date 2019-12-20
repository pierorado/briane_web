<?php
// llamando a los campos //
$asunto =$_POST['asunto2'];
$empresa =$_POST['empresa'];
$telefono =$_POST['telefono'];
$correo =$_POST['correo'];
$direccion =$_POST['direccion'];
$ciudad =$_POST['ciudad'];
$puesto=$_POST['puesto'];
$ruc=$_POST['ruc'];
$link=$_POST['link'];
$mensaje2 =$_POST['mensaje'];
$mensaje =null;
//Datos para el correo info@supervan.pe//

		if ($asunto=='')
		{	
			$mensaje="<div class='alert alert-danger' role='alert'>Introducir Asunto</div>";
		}else if($empresa==''){
			$mensaje="<div class='alert alert-danger' role='alert'>Introducir  Empresa</div>";
		}else if($telefono==''){
			$mensaje="<div class='alert alert-danger' role='alert'>Introducir Telefono</div>";
		}else if($correo==''){
			$mensaje="<div class='alert alert-danger' role='alert'>Introducir Correo Electronico</div>";
			}else if(!preg_match('/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/', $correo)){
			$mensaje="<div class='alert alert-danger' role='alert'>correo invalido.</div>";
		
		}else if($direccion==''){
			$mensaje="<div class='alert alert-danger' role='alert'>Introducir Direccion</div>";
		}else if($ciudad==''){
			$mensaje="<div class='alert alert-danger' role='alert'>Introducir  Ciudad</div>";
		}else if($puesto==''){
			$mensaje="<div class='alert alert-danger' role='alert'>Introducir  Puesto</div>";
		}else if($ruc==''){
			$mensaje="<div class='alert alert-danger' role='alert'>Introducir RUC</div>";
			}else if(!preg_match('/[0-9]{11,13}/', $ruc)){
				$mensaje="<div class='alert alert-danger' role='alert'>RUC invalido.</div>";

		}else if($link==''){
			$mensaje="<div class='alert alert-danger' role='alert'>Introducir Link de su Web </div>";
		}else if($mensaje2==''){
			$mensaje="<div class='alert alert-danger' role='alert'>Introducir mensaje</div>";
		}
		else{

			
		$destinatario ="juanradorado@gmail.com";
		$asunto = "Cotiza tu servicios de flete";
		$carta = '<!DOCTYPE html>
		<html>
		<head>
			<title></title>
		</head>
		<body>
			<h1>Haz recibido un Servicio de la web Briane.pe </h1>
			<p> Asunto:'.$asunto.'</p>
			<p> Empresa:'.$empresa.'</p>
			<p> Telefono:'.$telefono.'</p>
			<p> Correo:'.$correo.'</p>
			<p> Direccion:'.$direccion.'</p>
			<p> Ciudad:'.$ciudad.'</p>
			<p> Correo:'.$puesto.'</p>
			<p> Direccion:'.$ruc.'</p>
			<p> Ciudad:'.$link.'</p>
			<p> Mensaje:'.$mensaje2.'</p>
			<hr>
		</body>
		</html>';
		//Configuracion de los encabezados

		$headers="Content-type:text/html;charset=utf-8 ";
		 
		//enviando Mensaje
		$envio=mail($destinatario,$asunto,$carta,$headers);
		if ($envio) {

			$mensaje="<div class='alert alert-success' role='alert'>Gracias por cotizar en Briane, estamos derivando tu requerimiento a un asesor de ventas y que al menor plazo se contactará con usted.</div>";
		}else{
			$mensaje="<div class='alert alert-danger' role='alert'>No se pudo cotizar tu servicio ,intentenlo en otro momento</div>";
			
		}

}

echo $mensaje;
?>