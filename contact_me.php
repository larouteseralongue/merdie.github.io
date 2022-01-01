<?php

if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['phone'])     ||
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "Aucun argument fourni !";
   return false;
   }
   
$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));
   

$to = 'albinkamalebo87@gmail.com';
$email_subject = "Formulaire de contact du site Web:  $name";
$email_body = "Vous avez reçu un nouveau message du formulaire de contact de votre site Web.\n\n"."Voici les détails :\n\nNom : $name\n\nEmail : $email_address\n\nTéléphone : $phone\n\nMessage : \n$message";
$headers = "De: noreply@kaalwa.com\n"; 
$headers = "Répondre à: $email_address";   
mail($to,$email_subject,$email_body,$headers);
return true;         
?>