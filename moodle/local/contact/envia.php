<?php
$remitente = $_POST['email'];
$destinatario = 'sebasrz.rcia@gmail.com'; // en esta l�nea va el mail del destinatario.
$asunto = 'Consulta'; // ac� se puede modificar el asunto del mail
if (!$_POST){
?>

<?php
}else{
	 
    $cuerpo = "Nombre y apellido: " . $_POST["nombre"] . "\r\n"; 
    $cuerpo .= "Email: " . $_POST["email"] . "\r\n";
	$cuerpo .= "Consulta: " . $_POST["consulta"] . "\r\n";
	//las l�neas de arriba definen el contenido del mail. Las palabras que est�n dentro de $_POST[""] deben coincidir con el "name" de cada campo. 
	// Si se agrega un campo al formulario, hay que agregarlo ac�.

    $headers  = "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/plain; charset=utf-8\n";
    $headers .= "X-Priority: 3\n";
    $headers .= "X-MSMail-Priority: Normal\n";
    $headers .= "X-Mailer: php\n";
    $headers .= "From: \"".$_POST['nombre']." ".$_POST['apellido']."\" <".$remitente.">\n";

    $result = mail($destinatario, $asunto, $cuerpo, $headers);
    
    //include 'confirma.html'; //se debe crear un html que confirma el env�o
    if($result)
    {
      echo "Mensaje enviado correctamente";
    }else {
      echo "Ocurrio un error";
    }	
}
?>
