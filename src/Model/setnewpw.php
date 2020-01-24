<?php
require 'updateUserPass.php';

if (isset($_POST['pass']) && isset($_POST['repeatPass']) && $_POST['pass'] == $_POST['repeatPass'] ){
updateUserPass($_GET['resetToken'],$_POST['pass']);
}
if (isset($_GET['resetToken'])){
    $sql= 'SELECT updated_at FROM klant WHERE passwordresetToken=:resetToken';
    $stmt= openConnection()->prepare($sql);
    $stmt->bindValue(':resetToken', $_GET['resetToken']);
    $stmt->execute();
    $row= $stmt->fetch();
    var_dump($row);
echo "dumped";
}
/*else {
    header("Location: ../../View/home.php");
}*/

?>
<!DOCTYPE html>
<html>
<head><title>reset password</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="Webdevelopment, DeSchuimkraag, Bier, E-shop">
    <meta name="description" content="password reset pagina">
    <meta name="author" content="Danny, David, Geert, Kristel Jeroen,">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../public/css/navbar.css">
    <link rel="stylesheet" href="../../public/css/login.css">
    <link rel="stylesheet" href="../../public/css/footer.css"></head>
    <title>Reset Paswoord</title>
<body>
<?php include  '../../View/nav.php'; ?>
<div id="form">
    <div class="container">
        <div class="col-lg-6">
            <div id="userform">
                <div class="tab-content">           
               <div class="" id="signup">
                    <div class="alert alert-success mb-0"><h3> registreer uw nieuw wachtwoord</h3></div>
                    <h2 class="text-uppercase text-center">Reset Wachtwoord</h2>
                    <div class="warning hide" id="error_message_password_reset">
                            </div>

            <form action="" method="post" id="resetpw" novalidate>
                <div class="form-group">
                    <label> nieuw wachtwoord <span class="req">*</span> </label>
                    <input type="password" name="pass" id="password"class="form-control"  required
                           data-validation-required-message="Gelieve hier Uw emailadres in te geven"
                           autocomplete="off">
                    <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                    <label>herhaal nieuw wachtwoord <span class="req">*</span> </label>
                    <input type="password" name="repeatPass"  id="password_control" class="form-control" required
                           data-validation-required-message="Gelieve hier Uw emailadres in te geven"
                           autocomplete="off">
                    <p class="help-block text-danger"></p>
                </div>
                <div class="mrgn-30-top">
                    <button type="submit" name="submit" class="btn btn-larger btn-block">Reset wachtwoord
                    </button>
                </div>
            </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php require  '../../View/footer.php'; ?>
<script src="//code.jquery.com/jquery-1.11.3.min.js "></script>
<script src="../../public/js/resetpw.js"></script>
<script src="../../public/js/input.js"></script>
<script src="../../public/js/footer.js "></script>

</body>
</html>
