<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$to = 'alaisney7@gmail.com';
$body = 'De : '.$name.' ('.$email.')'."\n\n".$message;
mail($to, $subject, $body);

header('Location: index.php?menu=6&succes=1');

?>
