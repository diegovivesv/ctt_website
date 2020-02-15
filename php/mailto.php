<?php
$nombre= $_POST['nombre'];
$apellido= $_POST['apellido'];
$email= $_POST['email'];
$telefono= $_POST['telefono'];
$evento= $_POST['evento'];
$opinion= $_POST['opinion'];
$porciones= $_POST['porciones'];

$mensajeCompleto = "Nombre: " . $nombre . "\r\n" .
	"Apellido: " . $apellido ."\r\n" .
	"Email: " . $email . "\r\n" .
	"Teléfono: " . $telefono . "\r\n" .
	"Evento: " . $evento . "\r\n" .
	"Porciones: " . $porciones . "\r\n" .
	"\r\n" .
	"Mensaje: " . $opinion . "\r\n"; 



if(mail('informes@creatutorta.com', 'Enviado desde la web', $mensajeCompleto)){
	$envioOk = true;
	header('location:envio_email.php?envioOk=true#contacto');
} else {
	$envioOk = false;
}
?>
