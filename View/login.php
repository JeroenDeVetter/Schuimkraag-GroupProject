<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require '../src/Model/register.php';
require '../src/Model/login.php';

session_start();

if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['register']))
    {
        registerUser($_POST['company'],$_POST['firstName'],$_POST['lastName'],$_POST['btw'],$_POST['streedName'],$_POST['houseNum'],$_POST['gemeente'],$_POST['emailRegister'],$_POST['phoneNum'],$_POST['registerPass']);
    }


if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['logIN']))
{
    login($_POST['emailLog'],$_POST['passLog']);
}


var_dump($_SESSION);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/login.css">
    <title>Document</title>
</head>

<body>
    <div class="navbar navbar-inverse navbar-fixed-top bs-docs-nav" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="" class="navbar-brand">De Schuimkraag</a>
            </div>
            <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="about.html">Home</a>
                    </li>
                    <li>
                        <a href="#">Over Ons</b> </a>
                    </li>
                    <li>
                        <a href="#">E-Shop</a>
                    </li>
                    <li class="active">
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </nav>
        </div>

    </div>
    <!--========================-->
    <div id="form">
        <div class="container">
            <div class="col-lg-6">
                <div id="userform">
                    <ul class="nav nav-tabs nav-justified" role="tablist">
                        <li class="active"><a href="#signup" role="tab" data-toggle="tab"> Registreer</a></li>
                        <li ><a href="#login" role="tab" data-toggle="tab">Log in</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="signup">
                            <h2 class="text-uppercase text-center"> </h2>
                            <div class="warning">
                                <p class="warning-text">Voornaam is vereist</p>
                            </div>
                            <form action="" method="post" id="signup">
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
                                            <input type="text" name="company" class="form-control" id="last_name" required data-validation-required-message="Bedrijf." autocomplete="off">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group">
                                            <label> Btw-nr (optioneel). <span class="req"></span> </label>
                                            <input type="text" name="btw" class="form-control" id="btw-nr" required data-validation-required-message="Btw-nr." autocomplete="off">
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
                                        <input type="PC" name="postcode" class="form-control" id="postcode" required data-validation-required-message="Gelieve hier Uw Postcode in te geven." autocomplete="off">
                                        <p class="help-block text-danger"></p>
                                    </div>

                                    <div class="form-group col-sm-9">
                                        <select name="gemeente" class="form-control" {# style="background-color:rgba(90, 90, 90, 0.5);border-width: 1.25px;opacity:75%;border-color: white;color: whitesmoke;overflow-x: hidden;margin-top: 25px;height: 43px;" #}>
                                            <option value=" volvo">Volvo</option>
                                            <option value="saab">Saab</option>
                                            <option value="mercedes">Mercedes</option>
                                            <option value="audi">Audi</option>
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
                                            <label> Paswoord controle <span class="req">*</span> </label>
                                            <input type="password" class="form-control" id="password-control" required data-validation-required-message=" Paswoorden komen niet overeen" autocomplete="off">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mrgn-30-top">
                                    <button name="register" type="submit" class="btn btn-larger btn-block">
                                        Registreer
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade in" id="login">
                            <h2 class="text-uppercase text-center"> Log in</h2>
                            <form action="" method="post" id="login">
                                <div class="form-group">
                                    <label> Emailadres <span class="req">*</span> </label>
                                    <input type="email" name="emailLog" class="form-control" id="email" required data-validation-required-message="Gelieve hier Uw emailadres in te geven" autocomplete="off">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <label> Paswoord <span class="req">*</span> </label>
                                    <input type="password" name="passLog" class="form-control" id="password" required data-validation-required-message="Please enter your password" autocomplete="off">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="mrgn-30-top">
                                    <button type="submit" name="logIN" class="btn btn-larger btn-block" > Log in
                                    </button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container -->
    </div>
    <footer class="flex-rw ">

        <ul class="footer-list-top ">
            <li>
                <h4 class="footer-list-header ">Over De Schuimkraag</h4>
            </li>
            <li><a href='#' class="generic-anchor footer-list-anchor " itemprop="significantLink ">Meer Over Ons</a>
            </li>
            <li><a href='#' class="generic-anchor footer-list-anchor " itemprop="significantLink ">Promos</a></li>
            <li><a href='#' class="generic-anchor footer-list-anchor " itemprop="significantLink ">Wordt Verkoper</a>
            </li>

            <li><a href='#' itemprop="significantLink " class="generic-anchor footer-list-anchor ">Jobs</a></li>

            <li><a href='#' class="generic-anchor footer-list-anchor " itemprop="significantLink ">Evenementen</a></li>
        </ul>
        <ul class="footer-list-top ">
            <li>
                <h4 class="footer-list-header ">Geschenken Hoekje</h4>
            </li>
            <li><a href='#' class="generic-anchor footer-list-anchor ">Biermanden</a></li>
            <li><a href='#' class="generic-anchor footer-list-anchor " target="_blank ">Cadeaubonnen</a></li>
        </ul>
        <ul class="footer-list-top ">
            <li id='help'>
                <h4 class="footer-list-header ">Hulp Sectie</h4>
            </li>
            <li><a href='#' class="generic-anchor footer-list-anchor " itemprop="significantLink ">Contact</a></li>
            <li><a href='#' class="generic-anchor footer-list-anchor " itemprop="significantLink ">FAQ</a></li>
            <li id='find-a-store'><a href='#' class="generic-anchor footer-list-anchor " itemprop="significantLink ">Zoek Winkel</a></li>
            <li id='user-registration'><a href='login.html' class="generic-anchor footer-list-anchor " itemprop="significantLink ">Nieuwe Gebrukers</a></li>
            <li id='order-tracking'><a href='#' itemprop="significantLink " class="generic-anchor footer-list-anchor ">Track and Trace</a></li>
        </ul>

        <section class="footer-bottom-section flex-rw ">
            <div class="footer-bottom-wrapper ">
                2019 De Schuimkraag <address class="footer-address " role="company address ">Gent, BE</address><span class="footer-bottom-rights "> - Alle Rechten Voorbehouden - </span>
            </div>
            <div class="footer-bottom-wrapper ">
                <a href="/terms-of-use.html " class="generic-anchor " rel="nofollow ">Terms</a> | <a href="/privacy-policy.html " class="generic-anchor " rel="nofollow ">Privacy</a>
            </div>
        </section>
    </footer>
    <script src="//code.jquery.com/jquery-1.11.3.min.js "></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js "></script>
    <script src="../public/js/login.js "></script>


</body>


</html>
