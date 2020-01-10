<?php
function Sanitize($data){
    $data = trim($data);
    $data = filter_var($data, FILTER_SANITIZE_STRING);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
function login($email,$pass) {
    $userEmail = trim($email);
    $password = trim($pass);
    
    $sql = "SELECT email, hashed_wachtwoord,klant_voornaam , klant_achternaam FROM klant WHERE email = :email";
    $stmt = openConnection()->prepare($sql);
    $stmt->bindValue(':email', $userEmail);
        //Execute sql
    $stmt->execute();

    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    if (count($row) == 0) {
        $_SESSION['error_message'] = "user or password are not correct";
     
    } 
    if (password_verify($pass, $row['hashed_wachtwoord']) == true) {
            $var = $row;
            $_SESSION['success_message'] = "you are loged in";
            $_SESSION['voornaam'] = $row['klant_voornaam'];
            $_SESSION['email'] = $row['email'];

            $test = $row['hashed_wachtwoord'];
    }
    else {
        $_SESSION['error_message'] = "user and/or password are not correct";
    }

}