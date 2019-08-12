<?php
// llamando a los campos //
$asunto2 =$_POST['asunto2'];
$empresa =$_POST['empresa'];
$telefono =$_POST['telefono'];
$correo =$_POST['correo'];
$direccion =$_POST['direccion'];
$ciudad =$_POST['ciudad'];
$mensaje =$_POST['mensaje'];
//Datos para el correo//
$destinatario ="info@supervan.pe";
$asunto = "Cotiza tu servicios de flete";
$carta = '<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Haz recibido un Servicio de la web Briane.pe </h1>
	<p> Asunto:'.$asunto2.'</p>
	<p> Empresa:'.$empresa.'</p>
	<p> Telefono:'.$telefono.'</p>
	<p> Correo:'.$correo.'</p>
	<p> Direccion:'.$direccion.'</p>
	<p> Ciudad:'.$ciudad.'</p>
	<p> Mensaje:'.$mensaje.'</p>
	<hr>
</body>
</html>';
//Configuracion de los encabezados

$headers="Content-type:text/html;charset=utf-8 ";
 
//enviando Mensaje
$envio=mail($destinatario,$asunto,$carta,$headers);
if ($envio) {

	echo "<script>alert('Gracias por cotizar en Briane, estamos derivando tu requerimiento a un asesor de ventas y que al menor plazo se contatará con usted.');document.location='index.html';</script>";
}else{
	echo "<script>alert('No se pudo enviar el mensaje..');</script>";
}

?>