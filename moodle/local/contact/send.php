<?php
require 'PHPMailerAutoload.php';

$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host =  "smtp.gmail.php";
$mail->Port=587;
$mail->SMTPAuth=true;
$mail->SMTPSecure="tls";
$mail->Username = "subsecretariaempleochaco@gmail.com";
$mail->Password = "empleo2020";

$mail->setFrom('subsecretariaempleochaco@gmail.com', 'Web Capacitaciones');
$mail->addAddress('subsecretariaempleochaco@gmail.com');

$mail->Subject = 'Test Email';
$mail->Body = "Esto es una prueba";
$mail->CharSet = 'UTF-8'; // Con esto ya funcionan los acentos
$mail->IsHTML(false);

if (!$mail->send())
{
	echo "Error al enviar el E-Mail: ".$mail->ErrorInfo;
}
else
{
	echo "E-Mail enviado";
}
?>