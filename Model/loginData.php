<?php
session_start();

require 'connect.php';

$_SESSION['success_message'] ="";
$_SESSION['error_message']="";

function Sanitize($data){
$data = trim($data);
$data = filter_var($data, FILTER_SANITIZE_STRING);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (isset($_POST['userName'])) {
$_SESSION['userName'] = Sanitize($_POST['userName']);
$userName = $_SESSION['userName'];
$sql = "SELECT session_uid, first_name, last_name, username, email, hashed_password, preferred_language, gender, avatar FROM student WHERE username = :username";
$stmt = openConnection()->prepare($sql);
$stmt->bindValue(':username', $userName);
//Execute sql
$stmt->execute();

    //Fetch the row.
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    if (count($row) == 0) {
        $_SESSION['error_message'] = "user or password are not correct";
    } elseif (password_verify($_POST['password'], $row['hashed_password'])) {
            $_SESSION['session_uid'] = $_COOKIE['PHPSESSID'];
            $sessionID = $_SESSION['session_uid'];
            $sql = "UPDATE student SET session_uid = :sessionid WHERE username = :username";
            $stmt = openConnection()->prepare($sql);
            $stmt->bindValue(':username', $userName);
            $stmt->bindValue(':sessionid', $sessionID);
            //Execute sql
            $stmt->execute();
            $_SESSION['success_message'] = "you are loged in";
            $_SESSION['first_name'] = $row['first_name'];
            $_SESSION['last_name'] = $row['last_name'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['gender'] = $row['gender'];
            $_SESSION['preferred_language'] = $row['preferred_language'];
            $_SESSION['avatar'] = $row['avatar'];

            sleep(5);
            header("location: profile.php");
    }
    else {
        $_SESSION['error_message'] = "user and/or password are not correct";
    }
}

}
?>