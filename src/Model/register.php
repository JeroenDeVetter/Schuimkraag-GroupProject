<?php



require 'local.php';

function registerUser($firmanaam ,$firstname , $lastname , $btNo , $straat , $straatNo , $gemeenteId , $email , $phoneNo , $pass) {
    $db = openConnection();
    $shadPass = password_hash($pass, PASSWORD_DEFAULT);

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
      '$phoneNo',
      '$shadPass'
    )
  ");


}