<?php

require 'local.php';

function sendToDb($firmanaam ,$firstname , $lastname , $btNo , $straat , $straatNo , $gemeenteId , $email , $phoneNo , $pass) {
    $hashed_pass = password_hash($pass, PASSWORD_DEFAULT);
    $db = openConnection();
    $select = $db->query("INSERT INTO
    Students (
      firmanaam,
      klant_voorname,
      klant_achternaam,
      btwnummer,
      klantstraat,
      klantstraatnummer,
      gemeente_id,
      email,
      telefoonummer,
      hashed_wachtwoord
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
      '$telefoonummer',
      '$hashed_pass'
    )
  ");
}