<?php
require "david.php";

function getBier()
{
    $sql = "SELECT etiketafbeelding, biernaam, prijs FROM bier";
    $stmt = openConnection()->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    var_dump($result);
}


getBier();


