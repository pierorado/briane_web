<?php

$nombre =$_POST['nombre'];
$apellido =$_POST['apellido'];
$correo =$_POST['correo'];
$mensaje =$_POST['mensaje'];
$rsta =null;

$destinatario ="delpiee@hotmail.com";
$asunto = "Consultas desde la pagina Briane";
$carta = '<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Haz recibido una consulta de la web Briane.pe</h1>
	<p> Nombres:'.$nombre.'Apellido'.$apellido.'te ha enviado el siguiente mensaje:</p>
	<p> Mensaje:'.$mensaje.'<br><br>Puedes ponerte en contacto al email'.$correo.'</p>
	<hr>
</body>
</html>';

$headers="MIME-Version:1.0\r\n";
$headers.="Content-type:text/html;charset=utf-8\r\n";
 

$envio=mail($destinatario,$asunto,$carta,$headers);
if ($envio) {
	$rsta="<div class='alert alert-success' role='alert'>Un asesor responderá tu consulta en el más breve plazo.</div>";

}else{
$rsta="<div class='alert alert-danger' role='alert'>No se pudo enviar el mensaje .</div>";
}
echo $rsta;
?>