<?php

use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 

require_once ('PHPMailer\src\PHPMailer.php');
require_once ('PHPMailer\src\Exception.php');
require_once ('PHPMailer\src\SMTP.php');

//Crear una instancia de PHPMailer
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug  = 0;
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth= true;
$mail->Username = "luis.lopez@davinci.edu.ar";
$mail->Password = '/';
$mail->SetFrom('luis.lopez@davinci.edu.ar', 'Emmanuel Lopez');
$mail->addAddress($_POST["correo"]); //Remitente
//$mail->addBCC('luis.lopez@davinci.edu.ar'); // cco
$mail->isHTML(true);
//$mail->Subject = 'Formulario enviado desde el sitio Tecnologia BER';
$sector = $_POST['area'];
//$sector = 'ventas';

if($sector == '1'){
	$sector = 'Soporte Técnico';
	$mail->addBCC('luis.lopez@davinci.edu.ar');
}else if ($sector == '2'){
	$sector = 'Ventas';
	$mail->addBCC('luis.lopez@davinci.edu.ar');
}else if ($sector == '3'){
	$sector = 'Otros';
	$mail->addBCC('luis.lopez@davinci.edu.ar');
}else{
	$sector = 'No definido por el cliente';
	$mail->addBCC('luis.lopez@davinci.edu.ar');
}

$mail->Subject='Formulario de contacto - Tecnologias BER';
$mail->Body='<h1 align=left>Sus comentarios fueron recibidos con exito por Tecnilogias BER</h1> ' .
'<h3><ul align=left>' . 
 '<li>Nombre: '. $_POST['nombre']. '</li>' .
 '<br><li>Apellido: '. $_POST['apellido'] . '</li>'.
 '<br><li>Mail: '. $_POST['correo'] . '</li>'.
 '<br><li>Telefono: '.$_POST['telefono']. '</li>' .
 '<br><li>Area que desea contactar : '. $sector . '</li>' .
 '</ul></h3>'.
 '<br><h2>Su mensaje fue: </h2>' .
 '<br><h4>' . $_POST['mensaje'] . '</h4>';

if(!$mail->Send()) {
  echo "Error: " . $mail->ErrorInfo . '<br>' . "No se pudo enviar el correo electronico."; die();
} else {
	include_once('inc/header.php'); 
}
?>

<body>
	<div class="container">
		<div>
			<h1 class="text-center">Mensaje enviado con exito</h1>
		</div>
	</div>
</body>