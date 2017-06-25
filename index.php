<?php
$para = ‘ voltlost@gmail.com’ . ‘, ‘;
$titulo = ‘Movimiento detectado’;
$mensaje = ‘El sensor PIR ha detectado un movimiento en el lugar’;
$cabeceras = ‘From: no_responder@bit.com’ . “\r\n” .
‘Reply-To: no_responder@bit.com’ . “\r\n” .
‘X-Mailer: PHP/’ . phpversion();

mail($para, $titulo, $mensaje, $cabeceras);
?>