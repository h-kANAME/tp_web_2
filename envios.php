<?php
$titulo = 'KYZ - Mensaje Enviado';
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 
$_FILES['archivo'];
$nombre = $_FILES['archivo'] ['name'];
$guardado = $_FILES['archivo'] ['tmp_name'];

if(file_exists('contactos')){
	move_uploaded_file($guardado, 'contactos/' . $nombre . $_POST['correo'] . '.jpg');
	
	}else{
			die();
		}

require_once ('PHPMailer\src\PHPMailer.php');
require_once ('PHPMailer\src\Exception.php');
require_once ('PHPMailer\src\SMTP.php');

//Crear una instancia de PHPMailer
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug = 0;
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth= true;
$mail->Username = "luis.lopez@davinci.edu.ar";
$mail->Password = 'apk38etCCC';
$mail->SetFrom('luis.lopez@davinci.edu.ar', 'Emmanuel Lopez');
$mail->addAddress($_POST["correo"]); //Remitente
//$mail->addBCC('luis.lopez@davinci.edu.ar'); // cco
$mail->isHTML(true);
//$mail->Subject = 'Formulario enviado desde el sitio KYZ - Technology';
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
}else if ($sector == '0'){
	$sector = 'No definido por el cliente';
	$mail->addBCC('luis.lopez@davinci.edu.ar');
}

$mail->Subject='Formulario de contacto - KYZ - Technology';
$mail->Body='<h1 align=left>Sus comentarios fueron recibidos con exito por KYZ - Technology</h1> ' .
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
	$titulo = 'ERROR - No se pudo enviar Mensaje';
	include_once('inc/header.php'); 
	$alerta = 'No se pudo enviar mensaje';
	$mensaje = 'No se pudo enviar el correo electronico';	
	$error = 'Error: ';

//echo "Error: " . $mail->ErrorInfo . '<br>' . "No se pudo enviar el correo electronico."; //die();

} else {
	include_once('inc/header.php'); 
	$alerta = 'Mensaje enviado';
	$mensaje = 'Mensaje enviado con éxito, ahora podes seguir navegando tus productos favoritos!';	
	$error = ' ';
}
?>

<body>
	<div class="container">
		<div class="alert-link">
			<script>
			alert("<?php echo $alerta ?>");
			</script>
		</div>

		<div class="alert alert-dark alert-dismissible fade show my-5 text-center" role="alert">
			<strong><?php echo $mensaje . '<br>' . $error . $mail->ErrorInfo ?>
				</button>
		</div>

	</div>
</body>