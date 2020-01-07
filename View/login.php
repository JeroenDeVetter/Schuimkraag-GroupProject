<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="../html-css-js/login.css">
    <link rel="stylesheet" href="../html-css-js/EasyAutocomplete-1.3.5/easy-autocomplete.min.css">
    <link rel="stylesheet" href="../html-css-js/EasyAutocomplete-1.3.5/easy-autocomplete.themes.min.css">
    <title>Document</title>
</head>

<body>
    <div id="form">
        <div class="container">
            <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-md-8 col-md-offset-2">
                <div id="userform">
                    <ul class="nav nav-tabs nav-justified" role="tablist">
                        <li class="active"><a href="#signup" role="tab" data-toggle="tab"> Registreer</a></li>
                        <li><a href="#login" role="tab" data-toggle="tab">Log in</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="signup">
                            <h2 class="text-uppercase text-center"> </h2>
                            <form id="signup">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group">
                                            <label> Voornaam <span class="req">*</span> </label>
                                            <input type="text" name="firstName-sing" class="form-control"
                                                id="first_name" required data-validation-required-message="Voornaam."
                                                autocomplete="off">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    

                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group">
                                            <label> Familienaam <span class="req">*</span> </label>
                                            <input type="text" class="form-control" id="last_name" required
                                                data-validation-required-message="Achternaam." autocomplete="off">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group">
                                            <label> Bedrijf (optioneel)<span class="req"></span> </label>
                                            <input type="text" class="form-control" id="last_name" required
                                                data-validation-required-message="Bedrijf." autocomplete="off">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group">
                                            <label> Btw-nr (optioneel). <span class="req"></span> </label>
                                            <input type="text" class="form-control" id="last_name" required
                                                data-validation-required-message="Btw-nr." autocomplete="off">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                </div>
                                

                                <div class="form-group">
                                    <label> Emailadres <span class="req">*</span> </label>
                                    <input type="email" class="form-control" id="email" required
                                        data-validation-required-message="Gelieve hier emailadres in te geven."
                                        autocomplete="off">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <label> Telefoonnummer <span class="req">*</span> </label>
                                    <input type="tel" class="form-control" id="phone" required
                                        data-validation-required-message="Gelieve hier telefoonnummer in te geven."
                                        autocomplete="off">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="row">
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <label> Straatnaam <span class="req">*</span> </label>
                                            <input type="street" class="form-control" id="street" required
                                                data-validation-required-message="Gelieve hier Uw straatnaam en huisnummer in te geven."
                                                autocomplete="off">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label> Huisnummer <span class="req">*</span> </label>
                                            <input type="street" class="form-control" id="street" required
                                                data-validation-required-message="Gelieve hier Uw straatnaam en huisnummer in te geven."
                                                autocomplete="off">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label> Postcode <span class="req">*</span> </label>
                                    <input type="PC" class="form-control" id="postcode" required
                                        data-validation-required-message="Gelieve hier Uw Postcode in te geven."
                                        autocomplete="off">
                                    <p class="help-block text-danger"></p>
                                </div>
                                


                                <div class="row">
                                    <div class=" col-xs-12 col-sm-6">
                                        <div class="form-group">
                                            <label> Paswoord <span class="req">*</span> </label>
                                            <input type="password" class="form-control" id="password" required
                                                data-validation-required-message="Gelieve hier paswoord in te geven"
                                                autocomplete="off">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group">
                                            <label> Paswoord controle <span class="req">*</span> </label>
                                            <input type="password" class="form-control" id="password-control" required
                                                data-validation-required-message=" Paswoorden komen niet overeen"
                                                autocomplete="off">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mrgn-30-top">
                                    <button type="submit" class="btn btn-larger btn-block">
                                        Registreer
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade in" id="login">
                            <h2 class="text-uppercase text-center"> Log in</h2>
                            <form id="login">
                                <div class="form-group">
                                    <label> Emailadres <span class="req">*</span> </label>
                                    <input type="email" class="form-control" id="email" required
                                        data-validation-required-message="Gelieve hier Uw emailadres in te geven"
                                        autocomplete="off">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <label> Paswoord <span class="req">*</span> </label>
                                    <input type="password" class="form-control" id="password" required
                                        data-validation-required-message="Please enter your password"
                                        autocomplete="off">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="mrgn-30-top">
                                    <button type="submit" class="btn btn-larger btn-block" />
                                    Log in
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
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <script src="../html-css-js/login.js"></script>
    <script src="../html-css-js/Autocomplite.js"></script>

</body>

</html>