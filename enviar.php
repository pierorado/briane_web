<?php
// llamando a los campos //
$nombre =$_POST['nombre'];
$correo =$_POST['correo'];
$mensaje =$_POST['mensaje'];

//Datos para el correo//
$destinatario ="info@supervan.pe";
$asunto = "Consultas desde la pagina Briane";
$carta = '<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Haz recibido una consulta de la web Briane.pe</h1>
	<p> Nombre:'.$nombre.'te ha enviado el siguiente mensaje:</p>
	<p> Mensaje:'.$mensaje.'<br><br>Puedes ponerte en contacto al email'.$correo.'</p>
	<hr>
</body>
</html>';
//Configuracion de los encabezados
$headers="MIME-Version:1.0\r\n";
$headers.="Content-type:text/html;charset=utf-8\r\n";
 
//enviando Mensaje
$envio=mail($destinatario,$asunto,$carta,$headers);
if ($envio) {

	echo "<script>alert('Gracias por confiar en Briane , estamos procesando tu consulta y un asesor de comercial responderá tu consulta en el más breve plazo.');document.location='index.html';</script>";
}else{
	echo "<script>alert('No se pudo enviar el mensaje..');</script>";
}

?>