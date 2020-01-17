<?php
require "../../src/Model/connection.php";
function createBierCards()
{
    $sql = "SELECT bier_ID, biernaam, prijs, etiketafbeelding, bierstijlnaam FROM bier
JOIN bierstijl ON bierstijl.bierstijl_ID = bier.bierstijl_id";

    $stmt = openConnection()->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_OBJ);
    for ($i = 0; $i < count($result); $i++) {

        echo
            "<div class=\"product\" id=\"product_" . $result[$i]->bier_ID. "\">
                <div class=\"info-large\">
                    <h4>" . $result[$i]->biernaam . "</h4>

                    <div class=\"price-big\">
                        <span>€" . $result[$i]->prijs ."</span> 
    </div>

                    <button class=\"add-cart-large\">Add To Cart</button>

                </div>
                <div class=\"make3D\">
                    <div class=\"product-front\">
                        <div class=\"shadow\"></div>
                        <img src=\"../images/front/" .$result[$i]->etiketafbeelding. "\" alt=\"". $result[$i]->biernaam . "_front \" />
                        <div class=\"image_overlay\"></div>
                        <div class=\"add_to_cart\">Add to cart</div>
                        <div class=\"view_details\">View Details</div>
                        <div class=\"stats\">
                            <div class=\"stats-container\">
                                <span class=\"product_price\">€" . $result[$i]->prijs. "</span>
                                <span class=\"product_name\">" . $result[$i]->biernaam . "</span>
                                <p>" .  $result[$i]->bierstijlnaam. "</p>

                           
                            </div>
                        </div>
                    </div>

                   <div class=\"product-back\">
                          <img src=\"../images/back/" .$result[$i]->etiketafbeelding. "\" alt=\"". $result[$i]->biernaam . "_back \" />
                        <div class=\"backCardStyling stats-container\">
                        
                          <span class=\"product_alco\"> </span><br>
                          <span class=\"product_description\"> </span>
                          <span class=\"product_name_back\"> " . $result[$i]->biernaam . "</span>
                          <span class=\"product_price_back\">€" . $result[$i]->prijs . "</span>
                         </div>
                            <div class=\"shadow\">
                               
                             <div class=\"stats\">
                                <div class=\"stats-container\"></div>
                            </div>
                        </div>
            
                            <div class=\"flip-back\">
                                <div class=\"cy\"></div>
                                <div class=\"cx\"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>";
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/shop.css">
    <link rel="stylesheet" href="../css/footer.css">


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
                    <a href="#">Home</a>
                </li>
                <li>
                    <a href="about.php">Over Ons</b> </a>
                </li>
                <li>
                    <a href="../../View/login.php">Login</b> </a>
                </li>
                <li class="active">
                    <a href="#">E-Shop</a>
                </li>
                <li>
                    <a href="contact.html">Contact</a>
                </li>
            </ul>
        </nav>
    </div>

</div>
<div id="main_grid">

    <div id="sidebar">
        <h3>Winkelmandje</h3>
        <div id="cart">
            <span class="empty">Nog geen bier in mandje.</span>
        </div>
        <div id="checkout">
            CHECKOUT
        </div>

    </div>
    <div id="grid">
        <?php createBierCards(); ?>
    </div>
</div>

<footer class="flex-rw ">
    <ul class="footer-list-top ">
        <li>
            <h4 class="footer-list-header ">Over De Schuimkraag</h4>
        </li>
        <li><a href='#' class="generic-anchor footer-list-anchor " itemprop="significantLink ">Meer Over Ons</a>
        </li>
        <li><a href='#' class="generic-anchor footer-list-anchor " itemprop="significantLink ">Promos</a></li>
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
        <li id='find-a-store'><a href='#' class="generic-anchor footer-list-anchor " itemprop="significantLink ">Zoek
                Winkel</a></li>
        <li id='user-registration'><a href='login.html' class="generic-anchor footer-list-anchor "
                                      itemprop="significantLink ">Nieuwe Gebrukers</a></li>
    </ul>

    <section class="footer-bottom-section flex-rw">
        <div class="footer-bottom-wrapper ">
            &copy; De Schuimkraag <span id="htmlYear">year </span>
            <address class="footer-address " role="company address ">&nbsp;Gent, BE</address>
        </div>
        <div class="footer-bottom-wrapper">
            <a href="/terms-of-use.html" class="generic-anchor" rel="nofollow">Algemene voorwaarden</a> | <a
                    href="/privacy-policy.html" class="generic-anchor" rel="nofollow">Cookie Beleid</a> | <a
                    href="/cookie-policy.html" class="generic-anchor"
                    rel="nofollow">Privacy Beleid</a>
        </div>
    </section>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="../js/shop.js"></script>
<script src="../js/beerdetails.js"></script>
</body>
</html>
