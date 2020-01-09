<?php
require "../../src/Model/connection.php";

function getBier(){
    $sql = "SELECT bierbeschrijving, biernaam, prijs FROM bier";
    $stmt = openConnection()->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  // return var_dump($result);
    return $result;
}

getBier();

foreach (getBier() as $bier) {
    echo "biernaam: " . $bier["biernaam"] . "<br/>" .  "prijs :" . $bier["prijs"] . "<br/>" . "beschrijving: " . $bier["bierbeschrijving"];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/test.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <title>Document</title>
</head>
<header>
    <div class="navbar navbar-inverse navbar-fixed-top bs-docs-nav" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
                <a href="./" class="navbar-brand">De Schuimkraag</a>
            </div>
            <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li class="active"><a href="#">Over Ons</a>

                    </li>

                    <li>
                        <a href="#">E-Shop</a>
                    </li>
                    <li class="">
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    </div>
</header>

<body>


    </div>


    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <div id="wrapper">
        <div class="cart-icon-top">
        </div>

        <div class="cart-icon-bottom">
        </div>

        <div class="checkout" id="checkout">
            CHECKOUT
        </div>





        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <div id="wrapper">
        <div class="cart-icon-top">
        </div>

        <div class="cart-icon-bottom">
        </div>

        <div class="checkout" id="checkout">
            CHECKOUT
        </div>





        <div id="sidebar">
            <h3>CART</h3>
            <div id="cart">
                <span class="empty">No items in cart.</span>
            </div>

            <div id="grid">
                <div class="product">
                    <div class="info-large">
                        <h4>FLUTED HEM DRESS</h4>
                        <div class="sku">
                            PRODUCT SKU: <strong>89356</strong>
                        </div>

                        <div class="price-big">
                            <span>$43</span> $39
                        </div>



                        <button class="add-cart-large">Add To Cart</button>

                    </div>
                    <div class="make3D">
                        <div class="product-front">
                            <div class="shadow"></div>
                            <img class="biergroot" src="../images/brugsezotgroot.png" alt="brugse zot">
                            <div class="image_overlay"></div>
                            <div class="add_to_cart">Add to cart</div>
                            <div class="view_gallery">View gallery</div>
                            <div class="stats">
                                <div class="stats-container">
                                    <span class="product_price">2.6€</span>
                                    <span class="product_name">Brugse Zot</span>
                                    <p>Blonde Ale</p>


                                </div>
                            </div>
                        </div>

                        <div class="product-back">
                            <div class="shadow"></div>
                            <div class="carousel">
                                <ul class="carousel-container">
                                    <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/1.jpg" alt="" />
                                    </li>
                                    <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/2.jpg" alt="" />
                                    </li>
                                    <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/3.jpg" alt="" />
                                    </li>
                                </ul>
                                <div class="arrows-perspective">
                                    <div class="carouselPrev">
                                        <div class="y"></div>
                                        <div class="x"></div>
                                    </div>
                                    <div class="carouselNext">
                                        <div class="y"></div>
                                        <div class="x"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="flip-back">
                                <div class="cy"></div>
                                <div class="cx"></div>
                            </div>
                        </div>
                    </div>
                </div>



                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
                <script src="../js/test.js"></script>
</body>

</html>
