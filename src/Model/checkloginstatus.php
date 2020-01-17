<?php
if (isset($_COOKIE['PHPSESSID'])) {
    header("Location: http://schuimkraag.local/public/html/shop.php");
    die();
}
else {
    header("Location: http://schuimkraag.local/public/html/fillbeer.php");
    die();
}
