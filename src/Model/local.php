<?php
function openConnection()
{
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "123456";
    $db = "schuimkraag";

    $pdo = new PDO('mysql:host=' . $dbhost . ';dbname=' . $db, $dbuser, $dbpass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

    return $pdo;
}
