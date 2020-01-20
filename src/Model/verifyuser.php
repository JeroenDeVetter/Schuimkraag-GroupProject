<?php
require '../../src/Model/connection.php';


$tokenparam= $_GET['token'];
$sql = 'SELECT * FROM klant WHERE mail_token=:mailtoken';
//$sql = 'SELECT * FROM klant WHERE mail_token=:mailtoken AND email=:email';
$stmt=openConnection()->prepare($sql);
$stmt->bindValue(':mailtoken',$tokenparam);
//$stmt->bindValue(':email',$mailparam);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
var_dump($row);
if ($row != ""){
    $sql="UPDATE klant SET isVerified=1 WHERE mail_token=:mailtoken";
    $stmt=openConnection()->prepare($sql);
    $stmt->bindValue(':mailtoken', $tokenparam);
    $stmt->execute();
    $_SERVER['HTTP_REFERER']= "http://schuimkraag.local/src/Model/verifyuser.php";
    header("Location: http://schuimkraag.local/View/login.php");
    die();
}
else {
    header("Location: http://schuimkraag.local/src/Model/verifyfail.php");
    die();
}
