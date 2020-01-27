<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
require '../src/Model/requestnewPassword.php';


if (isset($_POST['emailnewPw']) && $_POST['emailnewPw'] != "") {
    requestNewPassword($_POST['emailnewPw']);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="Webdevelopment, DeSchuimkraag, Bier, E-shop">
    <meta name="description" content="resetpasword pagina">
    <meta name="author" content="Danny, David, Geert, Kristel Jeroen,">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../public/css/navbar.css">
    <link rel="stylesheet" href="../public/css/login.css">
    <link rel="stylesheet" href="../public/css/footer.css">
    <title>Reset Paswoord Mail</title>
</head>

<body>

<?php require 'nav.php' ?>
<!--========================-->
<div id="form">
    <div class="container">
        <div class="col-lg-6">
            <div id="userform">
                <div class="tab-content">
                    <?php
                        if (isset($_SESSION['pw-reseetconfirm'])) {
                            echo '<div class="alert alert-success mb-0"><h3>' . $_SESSION['pw-reseetconfirm'] . '</h3></div>';
                        }
                    ?>
                    <div class="" id="signup">
                    <h2 class="text-uppercase text-center">Wachtwoord vergeten</h2>
                    <div class="warning hide" id="error_message_resetpw">
                            </div>
                    <form action="" method="post" id="resetpw" novalidate>
                        

                        <div class="form-group">
                            <label> Emailadres <span class="req">*</span> </label>
                            <input type="email" name="emailnewPw" class="form-control" id="email" required
                                   data-validation-required-message="Gelieve hier Uw emailadres in te geven"
                                   autocomplete="off">
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="mrgn-30-top">
                            <button type="submit" name="submit" class="btn btn-larger btn-block"> verzend
                            </button>
                        </div>
                    </form>
                </div>
            </div>
                    </div>
        </div>
    </div>
</div>

<?php require 'footer.php' ?>
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="../public/js/resetPasswordMail.js"></script>
<script src="../public/js/input.js"></script>
<script src="../public/js/footer.js"></script>


</body>


</html>
