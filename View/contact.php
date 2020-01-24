<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="Webdevelopment, DeSchuimkraag, Bier, E-shop">
    <meta name="description" content="Contact pagina">
    <meta name="author" content="Danny, David, Geert, Kristel Jeroen,">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="../public/css/navbar.css">
    <link rel="stylesheet" href="../public/css/contact.css">
    <link rel="stylesheet" href="../public/css/footer.css">
    <title>contact</title>
</head>

<body>
  <?php require 'nav.php' ?>

    <!--========================-->
    <div id="form">
        <div class="container">
            <div class="col-lg-6">
                <div id="userform">
                    <div class="tab-content">
                        <div class="" id="signup">
                            <h2 class="text-uppercase text-center">Contacteer Ons</h2>

                            <div class="warning hide" id="error_message_contact">
                            </div>
                            <form id="signup" novalidate>
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
                                </div>
                                <div class="form-group">
                                    <label> Email <span class="req">*</span> </label>
                                    <input type="email" class="form-control" id="email_contact" required autocomplete="off">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <label> Onderwerp <span class="req">*</span> </label>
                                    <input type="text" class="form-control" id="subject_contact" required autocomplete="off">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <label class="bericht"> Uw Bericht<span class="req">*</span> </label>
                                    <textarea class="form-control" rows="10" name="message" required autocomplete="off" id="message"></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="mrgn-30-top">
                                    <button type="submit" class="btn btn-larger btn-block">
                                        Verzend Bericht
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="direct-contact-container">

                    <ul class="contact-list">

                        <li class="list-item"><i class="fa fa-phone fa-2x">
                            <span class="contact-text phone">
                            <a href="tel:+32476321861" title="Give me a call">0476 32 18 61</a>
                            </span></i>
                        </li>

                        <li class="list-item"><i class="fa fa-envelope fa-2x">
                            <span class="contact-text gmail">
                            <a href="mailto:deschuimkraag@gmail.com"
                                title="Send me an email">deschuimkraag@gmail.com</a>
                            </span></i>
                        </li>

                        <li class="list-item"><i class="fa fa-map-marker fa-2x"><span                   class="contact-text place">Gent |BE</span></i>
                        </li>

                    </ul>
                    <hr>
                    <ul class="social-media-list">
                        <li>
                            <a href="#" target="_blank" class="contact-icon">
                                <i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#" target="_blank" class="contact-icon">
                                <i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#" target="_blank" class="contact-icon">
                                <i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->

    <?php require 'footer.php'?>
    <script src="//code.jquery.com/jquery-1.11.3.min.js "></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js "></script>
    <script src="../public/js/input.js"></script>
    <script src="../public/js/contact.js"></script>
    <script src="../public/js/footer.js "></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>




</body>

</html>
