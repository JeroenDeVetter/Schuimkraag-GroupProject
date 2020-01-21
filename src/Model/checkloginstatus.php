<?php
//to see all errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//change to your local host name
if (isset($_COOKIE['PHPSESSID'])) {

    header("Location: {$_SERVER['HTTP_HOST']}/View/shop.php");
    die();
}
//change to your local host name
else {
    header_remove();
    header("Location: {$_SERVER['HTTP_HOST']}/View/fillbeer.php");
    die();
}
