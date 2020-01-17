<?php
echo "**********************************";
var_dump($_REQUEST);
$to = $_GET["mail"];
$naam = $_GET["naam"];
$token= $_GET["token"];


$subject = 'verify your registration @ de schuimkraag';

/*$headers = "From: " . strip_tags($_POST['req-email']) . "\r\n";
$headers .= "Reply-To: ". strip_tags($_POST['req-email']) . "\r\n";*/
$headers = "From: info@deschuimkraag.local" . "\r\n";
$headers .= "Reply-To: info@deschuimkraag.local" . "\r\n";
//$headers .= "CC: susan@example.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

$message = "<p><strong>Dear {$naam}</strong>, \r\n 
 thank you for registering.  Once we verifier your emailadres, you will be able to login. Please click the link to do so \r\n\ 
  <a href='http://schuimkraag.local/src/Model/verifyuser.php?token={$token}&mail={$to}'></a><button>verify</button></p>";


mail($to, $subject, $message, $headers);
