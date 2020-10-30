<?php 

//variables
$nombre = $_POST['nombre-es'];
$telefono = $_POST['telefono-es'];
$correo = $_POST['correo-es'];
$empresa = $_POST['empresa-es'];
$consulta = $_POST['mensaje-es'];

//<body><h1><img src="https://'.$_SERVER['HTTP_HOST'].'/img/logo.png" width="200px" /></h1>
$mensaje   = '
	<html>
	<head><title>Consulta enviada desde la web</title></head>
	
	<body><h1><img src="https://'.$_SERVER['HTTP_HOST'].'/img/logo3.png" width="200px" /></h1>
	<hr>
	
	<p><b>Nombre</b>: '.$nombre.'</p>
	<p><b>Teléfono</b>: '.$telefono.'</p>
	<p><b>Correo</b>: '.$correo.'</p>
	<p><b>Empresa</b>: '.$empresa.'</p>
	
	<br>
	<p><b>Mensaje</b>: '.$consulta.'</p>
	
	<hr>
	<font size="2">
	Consulta enviada desde la web.
	</font>
	</body>
	</html>';

try{	
	enviarCorreo('no-replay@estrategiasur.com.ar','Consulta enviada desde la web',$mensaje,$correo,$nombre);
	echo '<meta http-equiv="refresh" content="0; url=../?t='.e('¡Se envió el mensaje correctamente!').'#contacto">';
}catch(Exception $e){
	echo '<meta http-equiv="refresh" content="0; url=../?t='.e('¡Hubo un error al enviar el mensaje!').'#contacto">';
}

function e($string){
	return $string;
}

function enviarCorreo($to,$asunto,$mensaje,$from,$from_name=NULL,$archivo=NULL){
	//incluir galerias
	include_once '../lib/PHPMailer/PHPMailer.php';
	include_once '../lib/PHPMailer/Exception.php';
	include_once '../lib/PHPMailer/OAuth.php';
	include_once '../lib/PHPMailer/POP3.php';
	include_once '../lib/PHPMailer/SMTP.php';
	//crear instancia
	$mail = new PHPMailer\PHPMailer\PHPMailer();
	//tipo de envio
	$mail->isSMTP();
	//tipo de smtp
	$mail->SMTPDebug = false;
	//host mail de neolo
	$mail->Host = 'mail.estrategiasur.com.ar';
	// puerto para ssl/tls
	$mail->Port = 465;
	//seguridad
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = "ssl";
	//usuario y pass
	$mail->Username = '_mainaccount@estrategiasur.com.ar';
	$mail->Password = '5rY3alnM';
	//quien envia
	if($from_name!=NULL){
		$mail->setFrom($from, $from_name);
		$mail->addReplyTo($from,$from_name);
	}else{
		$mail->setFrom($from);
		$mail->addReplyTo($from);		
	}
	//a quien manda
	$mail->addAddress($to);

	//asunto y mensaje
	$mail->Subject = $asunto;
	$mail->isHTML(true);
	$mail->Body = $mensaje;
	$mail->CharSet = 'UTF-8';

	//agreagr archivo
	if($archivo!=NULL)
		$mail->addAttachment($archivo['tmp_name'],$archivo['name']);
	
	//enviar correo
	//if(!$mail->send()){
		
	///}
	throw new Exception('Momentaneamente no estamos recibiendo correos.');
}

?>