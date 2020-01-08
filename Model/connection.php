<?php
function openConnection()
{
    $dbhost = "sql7.freesqldatabase.com";
    $dbuser = "sql7317944";
    $dbpass = "7PMccmYIQn";
    $db = "sql7317944";

    $pdo = new PDO('mysql:host=' . $dbhost . ';dbname=' . $db, $dbuser, $dbpass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

    return $pdo;
}
