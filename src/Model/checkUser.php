<?php

function checkUser($firmanaam ,$firstname , $lastname , $btNo , $straat , $straatNo , int $gemeenteId , $email , $phoneNo , $pass) : bool {
    $con = openConnection();

    $query = $con->prepare( "SELECT `email` FROM `klant` WHERE `email` = ?" );
    $query->bindValue( 1, $email );
    $query->execute();

    if( $query->rowCount() > 0 ) { # If rows are found for query
        $_SESSION['Exists'] = "Email found!";
        return false;
    }
    else {
        unset($_SESSION['Exists']);
        registerUser($firmanaam ,$firstname , $lastname , $btNo , $straat , $straatNo , $gemeenteId , $email , $phoneNo , $pass);
        return true;
    }
}