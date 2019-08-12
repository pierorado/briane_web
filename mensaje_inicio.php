<?php
// llamando a los campos //
$nombre1 =$_POST['nombre1'];
$correo1 =$_POST['correo1'];
$telefono1 =$_POST['telefono1'];
$mensaje1 =$_POST['mensaje1'];

//Datos para el correo//
$destinatario ="info@supervan.pe";
$asunto = "Mensaje desde la pagina Briane";

$carta = '<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Haz recibido un mensaje de la web Briane.pe</h1>
	<p> Nombre y Apellido:'.$nombre1.'</p>
	<p> telefono:'.$telefono1.'te ha enviado el siguiente mensaje:</p>
	<p> Mensaje:'.$mensaje1.'<br><br>Puedes ponerte en contacto al email'.$correo1.'</p>
	<hr>
</body>
</html>';
//Configuracion de los encabezados

$headers="Content-type:text/html;charset=utf-8 ";
 
//enviando Mensaje
$envio=mail($destinatario,$asunto,$carta,$headers);
if ($envio) {

	echo "<script>alert('Gracias por confiar en Briane , estamos procesando tu mensaje y un asesor de comercial responderá tu consulta en el más breve plazo.');document.location='index.html';</script>";
}else{
	echo "<script>alert('No se pudo enviar el mensaje..');</script>";
}

?>