<?php
require 'connection.php';
function requestNewPassword( string $email){
    $sql = 'SELECT klant_voornaam,klant_ID from klant WHERE email=:email';
    $stmt = openConnection()->prepare($sql);
    $stmt->bindValue(':email', $email);
    $stmt->execute();
    $row = $stmt->fetch();
    var_dump($row);
    if ($row){
        $resetToken = bin2hex(openssl_random_pseudo_bytes(128));
        var_dump($resetToken);
        $sql = 'UPDATE klant SET passwordresetToken=:passwordResetToken where klant_ID=:row';
        $stmt = openConnection()->prepare($sql);
        $stmt->bindValue(':passwordResetToken',$resetToken);
        $stmt->bindValue(':row', $row['klant_ID']);
        $stmt->execute();
        $subject ="you request for passwordReset at the schuimkraag";
        $headers = "From: resetpw@deschuimkraag.local" . "\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
        $message = "Dear" .$row['klant_voornaam']. ",<br><br>" .
            "Apparantly you forgot your passord. The link below will be active for the coming 15 minutes to reset you password<br><br><a href=\"http://schuimkraag.local/src/Model/setnewpw.php?resetToken={$resetToken}\"><button>set new password</button></a><br><br>
<em>if you didn't request this password reset just ignore the mail.</em>";
        mail($email,$subject,$message,$headers);

        $_SESSION['pwresetconfirm']= "a mail with a link that expires in 15minutes has been send to the provided mailadres.";

    }
}
