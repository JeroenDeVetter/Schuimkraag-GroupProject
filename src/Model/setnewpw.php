<?php
require 'updateUserPass.php';

$sql =  'SELECT updated_at FROM klant WHERE klant_ID=:row';
$stmt= openConnection()->prepare($sql);
$stmt->bindValue(':row', $_GET['klant']);
$stmt->execute();
$result= $stmt->fetch();
$dateString= $result['updated_at'];
$sql2 =  "SELECT DATE_ADD('$dateString',INTERVAL 15 MINUTE)";
$stmt2= openConnection()->prepare($sql2);
$stmt2->execute();
$result2= $stmt2->fetch();
$expire= new DateTime($result2[0]);
$now = new DateTime();
if ($now > $expire){
    echo "link expired";
    $_SESSION['linkexpired'] = "The link was expired. You can request a new one below";
    header('Location: ../../View/resetpw.php');
    die();
}
else {
    echo "link still active";
}
if (isset($_POST['pass']) && isset($_POST['repeatPass']) && $_POST['pass'] == $_POST['repeatPass'] ){
    updateUserPass($_GET['resetToken'],$_POST['pass']);
}

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
<body>
<?php include  '../../View/nav.php'; ?>
<div id="form">
    <div class="container">
        <div class="col-lg-6">

            <div id="userform">
                <div class="tab-content">

                    <div class="alert alert-success mb-0"><h3> registreer uw nieuw wachtwoord</h3></div>


                    <form action="" method="post" id="resetpw" novalidate>
                        <div class="form-group">
                            <label> nieuw wachtwoord <span class="req">*</span> </label>
                            <input type="password" name="pass" id="password"class="form-control"  required
                                   data-validation-required-message="Gelieve hier Uw emailadres in te geven"
                                   autocomplete="off">
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                            <label>  herhaal nieuw wachtwoord <span class="req">*</span> </label>
                            <input type="password" name="repeatPass"  id="password_control" class="form-control" required
                                   data-validation-required-message="Gelieve hier Uw emailadres in te geven"
                                   autocomplete="off">
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="mrgn-30-top">
                            <button type="submit" name="submit" class="btn btn-larger btn-block"> zet nieuw wachtwoord
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require  '../../View/footer.php'; ?>
<script src="//code.jquery.com/jquery-1.11.3.min.js "></script>
<script src="../../public/js/registreer.js"></script>
<script src="../../public/js/input.js"></script>
<script src="../public/js/footer.js "></script>
</body>
</html>
