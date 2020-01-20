<?php



require 'connection.php';

function registerUser($firmanaam ,$firstname , $lastname , $btNo , $straat , $straatNo , $gemeenteId , $email , $phoneNo , $pass) {
    $db = openConnection();
    $shadPass = password_hash($pass, PASSWORD_DEFAULT);
    $mailtoken = bin2hex(openssl_random_pseudo_bytes(16));
    $select = $db->query("INSERT INTO
    klant (
      firmanaam,
      klant_voornaam,
      klant_achternaam,
      btwnummer,
      klantstraat,
      klantstraatnummer,
      gemeente_id,
      email,
      telefoonnummer,
      hashed_wachtwoord,
      mail_token
    )
  VALUES
    (
      '$firmanaam',
      '$firstname',
      '$lastname',
      '$btNo',
      '$straat',
      '$straatNo',
      '$gemeenteId',
      '$email',
      '$phoneNo',
      '$shadPass',
      '$mailtoken'
    )
  ");
//$_SERVER['HTTP_HOST']
    header("Location: {$_SERVER['HTTP_HOST']}/src/Model/registrationMail.php?mail={$email}&naam={$firstname}&token={$mailtoken}");
    die();

}
