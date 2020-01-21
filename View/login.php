
<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
require '../src/Model/register.php';
require '../src/Model/login.php';
require '../src/Model/checkUser.php';
//session_start();
if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['register']))
    {
        checkUser($_POST['company'],$_POST['firstName'],$_POST['lastName'],$_POST['btw'],$_POST['streedName'],$_POST['houseNum'],$_POST['gemeente'],$_POST['emailRegister'],$_POST['phoneNum'],$_POST['registerPass']);
        var_dump($_POST['postcode']);
    }
if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['logIN']))
{
    login($_POST['emailLog'],$_POST['passLog']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="Webdevelopment, DeSchuimkraag, Bier, E-shop">
    <meta name="description" content="Login pagina">
    <meta name="author" content="Danny, David, Geert, Kristel Jeroen,">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="../public/css/login.css">
    <link rel="stylesheet" href="../public/css/navbar.css">
    <link rel="stylesheet" href="../public/css/footer.css">
    <title>Login-or-Registration</title>
</head>

<body>

<?php require 'nav.php'?>
    <!--========================-->
    <div id="form">
        <div class="container">
            <div class="col-lg-6">
              <?php
                 if (isset($_SESSION['Exists'])) {
                     echo  '<div class="alert alert-danger mb-0"><h3>'. $_SESSION['Exists'] . '</h3></div>';
                 }
                 if (isset($_SESSION['success_message'])) {
                     echo  '<div class="alert alert-danger mb-0"><h3>'. $_SESSION['success_message'] . '</h3></div>';
                 }

                if (isset($_SESSION['error_message'])) {
                  echo  '<div class="alert alert-danger mb-0"><h3>'. $_SESSION['error_message'] . '</h3></div>';
                }

              ?>
                <div id="userform">
                    <ul class="nav nav-tabs nav-justified" role="tablist">
                        <li class="active"><a href="#login" role="tab" data-toggle="tab">Log in</a></li>
                        <li ><a href="#signup" role="tab" data-toggle="tab"> Registreer</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade in" id="signup">
                            <h2 class="text-uppercase text-center">Registreer</h2>
                            <div class="warning hide" id="error_message"></div>
                            <form action="" method="post" id="signup" novalidate>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group">
                                            <label> Voornaam <span class="req">*</span> </label>
                                            <input type="text" name="firstName" class="form-control" id="first_name" required data-validation-required-message="Voornaam." autocomplete="off">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group">
                                            <label> Familienaam <span class="req">*</span> </label>
                                            <input type="text" name="lastName" class="form-control" id="last_name" required data-validation-required-message="Achternaam." autocomplete="off">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group">
                                            <label> Bedrijf (optioneel)<span class="req"></span> </label>
                                            <input type="text" name="company" class="form-control" id="company_name" autocomplete="off">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group">
                                            <label> Btw-nr (optioneel). <span class="req"></span> </label>
                                            <input type="text" name="btw" class="form-control" id="vat_nr" autocomplete="off">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label> Emailadres <span class="req">*</span> </label>
                                    <input type="email" name="emailRegister" class="form-control" id="email" required data-validation-required-message="Gelieve hier emailadres in te geven." autocomplete="off">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <label> Telefoonnummer <span class="req">*</span> </label>
                                    <input type="tel" name="phoneNum" class="form-control" id="phone" required data-validation-required-message="Gelieve hier telefoonnummer in te geven." autocomplete="off">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="row">
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <label> Straatnaam <span class="req">*</span> </label>
                                            <input type="street" name="streedName" class="form-control" id="street" required data-validation-required-message="Gelieve hier Uw straatnaam en huisnummer in te geven." autocomplete="off">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label> Huisnummer <span class="req">*</span> </label>
                                            <input type="street" name="houseNum" class="form-control" id="streetnumber" required data-validation-required-message="Gelieve hier Uw straatnaam en huisnummer in te geven." autocomplete="off">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-sm-3">
                                        <label> Postcode <span class="req">*</span> </label>
                                        <input type="PC" name="postcode" class="form-control" id="postcode" required data-validation-required-message="Gelieve hier Uw Postcode in te geven." maxlength ="4" autocomplete="off">
                                        <p class="help-block text-danger"></p>
                                    </div>

                                    <div class="form-group col-sm-9">
                                        <select name="gemeente" class="form-control" maxlength="4" id="target" {# style="background-color:rgba(90, 90, 90, 0.5);border-width: 1.25px;opacity:75%;border-color: white;color: whitesmoke;overflow-x: hidden;margin-top: 25px;height: 43px;" #}>
                                        </select>

                                    </div>


                                </div>

                                <div class="row">
                                    <div class=" col-xs-12 col-sm-6">
                                        <div class="form-group">
                                            <label> Paswoord <span class="req">*</span> </label>
                                            <input type="password" name="registerPass" class="form-control" id="password" required data-validation-required-message="Gelieve hier paswoord in te geven" autocomplete="off">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group">
                                            <label> Herhaal paswoord <span class="req">*</span> </label>
                                            <input type="password" class="form-control" id="password_control" required data-validation-required-message=" Paswoorden komen niet overeen" autocomplete="off">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mrgn-30-top">
                                    <button name="register" value="Submit" type="submit" class="btn btn-larger btn-block">
                                        Registreer
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade active in" id="login">
                            <h2 class="text-uppercase text-center"> Log in</h2>
                            <div class="warning hide" id="error_message_login"></div>
                            <form action="" method="post" id="login" novalidate>
                                <div class="form-group">
                                    <label> Emailadres <span class="req">*</span> </label>
                                    <input type="email" name="emailLog" class="form-control" id="email_login" required data-validation-required-message="Gelieve hier Uw emailadres in te geven" autocomplete="off">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <label> Paswoord <span class="req">*</span> </label>
                                    <input type="password" name="passLog" class="form-control" id="password_login" required data-validation-required-message="Please enter your password" autocomplete="off">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="mrgn-30-top">
                                    <button type="submit" name="logIN" class="btn btn-larger btn-block" > Log in
                                    </button>
                                </div>
                                <div class="link">
                                    <a href="#">Wachtwoord vergeten?</a>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container -->
    </div>
    <?php require 'footer.php'?>
    <script src="//code.jquery.com/jquery-1.11.3.min.js "></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js "></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="../public/js/input.js "></script>
    <script src="../public/js/footer.js "></script>
    <script src="../public/js/registreer.js "></script>
    <script src="../public/js/login.js"></script>

</body>


</html>
