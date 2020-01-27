<?php
require 'connection.php';
function requestNewPassword( string $email){
    $sql = 'SELECT klant_voornaam,klant_ID from klant WHERE email=:email';
    $stmt = openConnection()->prepare($sql);
    $stmt->bindValue(':email', $email);
    $stmt->execute();
    $row = $stmt->fetch();
    if ($row){
        $resetToken = bin2hex(openssl_random_pseudo_bytes(64));
      $sql = 'UPDATE klant SET passwordresetToken=:passwordResetToken where klant_ID=:row';

        $stmt = openConnection()->prepare($sql);
        $stmt->bindValue(':passwordResetToken',$resetToken);
        $stmt->bindValue(':row', $row['klant_ID']);
        $stmt->execute();
        $subject ="your request for passwordReset at the schuimkraag";
        $headers = "From: resetpw@deschuimkraag.local" . "\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
        $message = "Dear " .$row['klant_voornaam']. ",<br><br>" .
            "Apparantly you forgot your password.<br> The link below will expire in 15 minutes.<br><br><a href=\"http://schuimkraag.local/src/Model/setnewpw.php?resetToken={$resetToken}&klant={$row['klant_ID']}\"><button>set new password</button></a><br><br>
<em>if you didn't request this password reset just ignore the mail.</em>";
        mail($email,$subject,$message,$headers);
        $_SESSION['pwresetconfirm']= "a mail with a link that expires in 15 minutes has been send to the provided mailadres.";
    }

}
