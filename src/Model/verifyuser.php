<?php
require 'connection.php';
echo "verifyuser";
$mailparam= $_GET['mail'];
$tokenparam= $_GET['token'];
$sql = 'SELECT * FROM klant WHERE mail_token=:mailtoken AND email=:email';
$stmt=openConnection()->prepare($sql);
$stmt->bindValue(':mailtoken',$tokenparam);
$stmt->bindValue(':email',$_GET['mail']);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
var_dump($row);
//if ($row != ""){

//}
