<?php
require "connection.php";
function updateUserPass($userToken)
{
    $hashedPass = password_hash($_POST['pass'], PASSWORD_DEFAULT);
    $sql = "UPDATE klant SET hashed_wachtwoord=:hashedPass where passwordresetToken=:userToken";
    $stmt = openConnection()->prepare($sql);
    $stmt->bindValue(':hashedPass', $hashedPass);
    $stmt->bindValue(':userToken', $userToken);
    $stmt->execute();
    $result = $stmt->rowCount();
    if ($result == 1) {
        $sql = "UPDATE klant SET passwordresetToken=null where passwordresetToken=:userToken";
        $stmt = openConnection()->prepare($sql);
        $stmt->bindValue('userToken', $userToken);
        $stmt->execute();
    }
}
