<?php
require "../../src/Model/connection.php";
function createBierCards()
{
    $sql = "SELECT bier_ID, biernaam, prijs, etiketafbeelding, bierstijlnaam FROM bier
JOIN  bierstijl ON  bierstijl.bierstijl_ID = bier.bierstijl_id";

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
                         </div>
                            <div class=\"shadow\">
                               
                             <div class=\"stats\">
                                <div class=\"stats-container\">
                                    <span class=\"product_price\">€" . "danny". "</span>
                                    <span class=\"product_name\">" . $result[$i]->biernaam . "</span>
                                    <p>" .  $result[$i]->bierstijlnaam. "</p>

                               
                                </div>
                            </div>
</div>
            
                            <div class=\"flip-back\">
                                <div class=\"cy\"></div>
                                <div class=\"cx\"></div>
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
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../css/shop.css">

    <title>Document</title>
</head>

<body>
    <div id="wrapper">
        <div class="cart-icon-top">
        </div>

        <div class="cart-icon-bottom">
        </div>

        <div id="checkout">
            CHECKOUT
        </div>





        <div id="sidebar">
            <h3>CART</h3>
            <div id="cart">
                <span class="empty">No items in cart.</span>
            </div>




            <div id="grid">
<?php createBierCards(); ?>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="menu.js"></script>



        <script src="../js/shop.js"></script>
        <script src="../js/beerdetails.js"></script>
</body>

</html>
