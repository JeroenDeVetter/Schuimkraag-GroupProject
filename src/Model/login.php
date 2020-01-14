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
    
    $sql = "SELECT email, hashed_wachtwoord FROM klant WHERE email = :email";
    $stmt = openConnection()->prepare($sql);
    $stmt->bindValue(':email', $userEmail );
        //Execute sql
    $stmt->execute();

    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    if (count($row) == 0) {
        $_SESSION['error_message'] = "user or password are not correct";
     
    } 
    if (password_verify($pass, $row['hashed_wachtwoord']) == true) {
            $_SESSION['success_message'] = "U bent aangemeld";
            if (isset($_SESSION['error_message'])) {
                unset($_SESSION['error_message']);
                if ($_SESSION['Exists']) {
                    unset($_SESSION['Exists']);
                }
            }
    }
    else {
        if (isset($_SESSION['success_message'])) {
            unset($_SESSION['success_message']);
            if ($_SESSION['Exists']) {
                unset($_SESSION['Exists']);
            }
        }

        $_SESSION['error_message'] = "user and/or password are not correct";
    }

}