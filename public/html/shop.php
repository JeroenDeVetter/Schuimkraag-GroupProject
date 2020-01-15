 <?php
require "../../src/Model/local.php";
function createBierCards()
{
    $sql = "SELECT biernaam, prijs, etiketafbeelding, bierstijlnaam FROM bier
JOIN  bierstijl ON  bierstijl.bierstijl_ID = bier.bierstijl_id";

    $stmt = openConnection()->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_OBJ);
    for ($i = 0; $i < count($result); $i++) { 

    /*    echo "
    <div class=\"product\">
                <div class=\"info-large\">
                    <h4>" .$result[$i]->biernaam ."</h4>
                    <div class=\"sku\">
        PRODUCT SKU: <strong>". "SKUTOTDO" ."</strong>
                    </div>

                    <div class=\"price-big\">
                        <span>" . $result[$i]->prijs."</span>" . $result[$i]->prijs ."
        </div>


                    <button class=\"add-cart-large\">Add To Cart</button>

                </div>
                <div class=\"make3D\">
                    <div class=\"product-front\">
                        <div class=\"shadow\"></div>
                        <img class=\"biergroot\" src=\"" . $result[$i]->etiketafbeelding ."\" alt=\"" .$result[$i]->biernaam ."\">
                        <div class=\"image_overlay\"></div>
                        <div class=\"add_to_cart\">Add to cart</div>
                        <div class=\"view_gallery\">View gallery</div>
                        <div class=\"stats\">
                            <div class=\"stats-container\">
                                <span class=\"product_price\">" .$result[$i]->prijs . "€</span>
                                <span class=\"product_name\">". $result[$i]->biernaam ."</span>
                                <p>Blonde Ale</p>


                            </div>
                        </div>
                    </div>

                    <div class=\"product-back\">
                        <div class=\"shadow\"></div>
                        <div class=\"carousel\">
                            <ul class=\"carousel-container\">
                                <li><img src=\"https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/1.jpg\" alt=\"\"/>
                                </li>
                                <li><img src=\"https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/2.jpg\" alt=\"\"/>
                                </li>
                                <li><img src=\"https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/3.jpg\" alt=\"\"/>
                                </li>
                            </ul>
                            <div class=\"arrows-perspective\">
                                <div class=\"carouselPrev\">
                                    <div class=\"y\"></div>
                                    <div class=\"x\"></div>
                                </div>
                                <div class=\"carouselNext\">
                                    <div class=\"y\"></div>
                                    <div class=\"x\"></div>
                                </div>
                            </div>
                        </div>
                        <div class=\"flip-back\">
                            <div class=\"cy\"></div>
                            <div class=\"cx\"></div>
                        </div>
                    </div>
                </div>
            </div>";*/
    echo
         "<div class=\"product\">
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
                            <img src=\"" .$result[$i]->etiketafbeelding. "\" alt=\"". $result[$i]->biernaam . " \" />
                            <div class=\"image_overlay\"></div>
                            <div class=\"add_to_cart\">Add to cart</div>
                            <div class=\"view_gallery\">View Details</div>
                            <div class=\"stats\">
                                <div class=\"stats-container\">
                                    <span class=\"product_price\">€" . $result[$i]->prijs. "</span>
                                    <span class=\"product_name\">" . $result[$i]->biernaam . "</span>
                                    <p>" .  $result[$i]->bierstijlnaam. "</p>

                               
                           </div>
                            </div>
                        </div>

                        <div class=\"product-back\">
                            <div class=\"shadow\"></div>
            
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
    <link rel="stylesheet" href="../css/testshop.css">

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
</body>

</html>