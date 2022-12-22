<?php
// Récupère les données envoyées par le formulaire
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Envoie un mail à votre adresse
$to = 'alaisney7@gmail.com';
$subject = 'Message de '.$name;
$body = 'De : '.$name.' ('.$email.')'."\n\n".$message;
mail($to, $subject, $body);

// Affiche un message de confirmation
echo '<p>Votre message a été envoyé avec succès !</p>';
?>