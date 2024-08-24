<?php 
$destino= "info@posadadelvientotandil.com";
$nombre=$_POST['name']; 
$email=$_POST['email']; 
$phone=$_POST['phone'];
$mensaje=$_POST['message']; 
$contenido = "Nombre: ". $nombre ."\n  
Telefono:" .$phone." \n
Email: ".$email."  \n 
Mensaje: ".$mensaje."\n";   

$headers = "From: $nombre <$email>\n"; 

mail ($destino,"Consulta desde la web",$contenido, $headers);

if (!$envio){}else{   
Header ("Location: $thank" );   
} 
?>
