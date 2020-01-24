<?php
//to see all errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//change to your local host name
if (isset($_COOKIE['PHPSESSID'])) {
    header("Location: http://localhost/Schuimkraag/Schuimkraag-GroupProject/View/shop.php");
    die();
}
//change to your local host name
else {
    header("Location: http://localhost/Schuimkraag/Schuimkraag-GroupProject/View/fillbeer.php");
    die();
}
