<?php

$enviarMensaje_nombre=$_POST['nombre'];
$enviarMensaje_apellido=$_POST['apellido'];
$enviarMensaje_email=$_POST['email'];
$enviarMensaje_telefono=$_POST['telefono'];
$enviarMensaje_mensaje=$_POST['mensaje'];

$destino="patoorlando2@gmail.com";

$asunto="Mensaje enviado desde www.divproweb.com";

$cuerpo="Nombre: ".$enviarMensaje_nombre."\r\n";
$cuerpo.="Apellido: ".$enviarMensaje_apellido."\r\n";
$cuerpo.="Correo: ".$enviarMensaje_email."\r\n";
$cuerpo.="Teléfono: ".$enviarMensaje_telefono."\r\n";
$cuerpo.="Mensaje: ".$enviarMensaje_mensaje;

$remitente="From: $enviarMensaje_nombre $enviarMensaje_apellido <$enviarMensaje_email>";

mail($destino, $asunto, $cuerpo, $remitente);

include("connection.php");

mysqli_query($connection, "INSERT INTO contacto VALUES(0,'$enviarMensaje_nombre','$enviarMensaje_apellido', '$enviarMensaje_email', '$enviarMensaje_telefono', '$enviarMensaje_mensaje')");

mysqli_close($connection);

header("Location:mensaje_enviado.php");
?>	






	









?>