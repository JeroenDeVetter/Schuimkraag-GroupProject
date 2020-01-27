<?php
//to see all errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//change to your local host name
function setHeader($locationPath){
    return header($locationPath);
}

setHeader('$_SERVER[HTTP_HOST]/View/fillbeer.php');
