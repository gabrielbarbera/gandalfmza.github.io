<?php
// check if fields passed are empty
if(empty($_POST['name'])  		||
   empty($_POST['phone']) 		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$phone = $_POST['phone'];
$email_address = $_POST['email'];
$message = $_POST['message'];
	
// create email body and send it	
$to = 'info@gabrielbarbera.com.ar'; // PUT YOUR EMAIL ADDRESS HERE
$email_subject = "Nuevo contacto desde gabrielbarbera.com.ar de:  $name"; // EDIT THE EMAIL SUBJECT LINE HERE
$email_body = "Nuevo contacto desde gabrielbarbera.com.ar.\n\n"."Estos son los detalles:\n\nNombre: $name\n\nTeléfono: $phone\n\nEmail: $email_address\n\nMensaje:\n$message";
$headers = "From: info@gabrielbarbera.com.ar\n";
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>