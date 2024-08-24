<?php 
$destino= "info@posadadelvientotandil.com";
$nombre=$_POST['fname']; 
$apellido=$_POST['lname']; 
$ingreso=$_POST['ingreso']; 
$egreso=$_POST['egreso']; 
$adultos=$_POST['adultos'];
$menores=$_POST['menores'];
$email=$_POST['email']; 
$phone=$_POST['phone'];
$mensaje=$_POST['message']; 
$contenido = "Nombre: ". $nombre ."\n 
Apellido: ". $apellido ."\n
Ingreso: ". $ingreso ." \n
Egreso: ". $egreso ." \n
Adultos: ". $adultos ." \n
Menores: ". $menores ." \n
Telefono: ". $phone." \n
Email: ". $email."  \n 
Mensaje: ". $mensaje."\n";   

$headers = "From: $fname $apellido <$email>\n"; 

mail ($destino,"Consulta desde la web",$contenido, $headers);

header("Location:gracias.html");   

if ($_POST['g-recaptcha-response'] == '') {
echo "Captcha invalido";
} else {
$obj = new stdClass();
$obj->secret = "6LdIgDUiAAAAALA75fb-7VUmZeoGWYg5OrqEs-3C";
$obj->response = $_POST['g-recaptcha-response'];
$obj->remoteip = $_SERVER['REMOTE_ADDR'];
$url = 'https://www.google.com/recaptcha/api/siteverify';
$options = array(
'http' => array(
'header' => "Content-type: application/x-www-form-urlencoded\r\n",
'method' => 'POST',
'content' => http_build_query($obj)
)
);
$context = stream_context_create($options);
$result = file_get_contents($url, false, $context);

$validar = json_decode($result);

?>

