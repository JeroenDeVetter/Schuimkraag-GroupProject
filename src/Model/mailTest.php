<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../../vendor/phpmailer/phpmailer/src/Exception.php';
require '../../vendor/phpmailer/phpmailer/src/PHPMailer.php';
require '../../vendor/phpmailer/phpmailer/src/SMTP.php';

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug = 1;
$mail->SMTPAuth = true;
$mail->SMTPSecure = "tls";
$mail->Port     = 587;
$mail->Username = "schuimkraaggent@gmail.com";
$mail->Password = "schuimkraag";
$mail->Host     = "smtp.gmail.com";
$mail->Mailer   = "smtp";
$mail->SetFrom("schuimkraaggent@gmail.com", "Shuimkraag");
$mail->AddReplyTo("schuimkraaggent@gmail.com", "PHPPot");
$mail->AddAddress("devetterjeroen@gmail.com");
$mail->Subject = "Test email using PHP mailer";
$mail->WordWrap   = 80;
$content = "<b>This is a test email using PHP mailer class.</b>"; $mail->MsgHTML($content);
$mail->IsHTML(true);
if(!$mail->Send())
    echo "Problem sending email.";
else
    echo "email sent.";