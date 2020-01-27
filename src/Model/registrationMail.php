<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

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

$message = "<p><strong>Dear {$naam}</strong>, <br><br>" .
          "Thank you for registering on the <strong>Schuimkraag</strong>. Once we verified your emailadres, you will be able to login. Please click the link to do so. <br><br>" .
          "<a href=\"http://becode.local/Schuimkraag-GroupProject/src/Model/verifyuser.php?token={$token}&mail={$to}\"><button>verify</button></a></p>";



mail($to, $subject, $message, $headers);
