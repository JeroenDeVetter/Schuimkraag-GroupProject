<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="Webdevelopment, DeSchuimkraag, Bier, E-shop">
    <meta name="description" content="Checkout pagina">
    <meta name="author" content="Danny, David, Geert, Kristel Jeroen,">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/css/checkout.css">
    <link rel="stylesheet" href="../public/css/navbar.css">
    <link rel="stylesheet" href="../public/css/footer.css">
    <title>Document</title>
</head>

<body>
    <header>
      <?php require 'nav.php'?>
    </header>
    <main>
        <div class="container">
            <div class="row invoice-header px-3 py-2">
                <div class="col-4">
                    <p>Company Name</p>
                    <h1>INVOICE</h1>
                </div>
                <div class="col-4 text-right">
                    <p>(011)-123-1243</p>
                    <p>email@adress.com</p>
                    <p>personal-website.com</p>
                </div>
                <div class="col-4 text-right">
                    <p>Street Adress</p>
                    <p>City, State Adress, ZIP</p>
                    <p>VAT ID / PID</p>
                </div>
            </div>

            <div class="invoice-content row px-5 pt-5">
                <div class="col-3">
                    <h5 class="almost-gray mb-3">Invoiced to:</h5>
                    <p class="gray-ish">Client Name</p>
                    <p class="gray-ish">Client Adress spanning on two rows hopefully.</p>
                    <p class="gray-ish">VAT ID: 12091803</p>
                </div>
                <div class="col-3">
                    <h5 class="almost-gray">Invoice number:</h5>
                    <p class="gray-ish"># 123456789</p>

                    <h5 class="almost-gray">Date of Issue:</h5>
                    <p class="gray-ish">01 / 01 / 20 20 </p>

                </div>
                <div class="col-6 text-right total-field">
                    <h4 class="almost-gray">Invoice Total</h4>
                    <h1 class="gray-ish">634,57 <span class="curency">&euro;</span></h1>
                    <h5 class="almost-gray due-date">Due Date: 01 / 01 / 20 20</h5>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-10 offset-1 invoice-table pt-1">
                    <table class="table table-hover">
                        <thead class="thead splitForPrint">
                            <tr>
                                <th scope="col gray-ish">NO.</th>
                                <th scope="col gray-ish">Item</th>
                                <th scope="col gray-ish">Qty.</th>
                                <th scope="col gray-ish">U. Price</th>
                                <th scope="col gray-ish">VAT %</th>
                                <th scope="col gray-ish">Discount</th>
                                <th class="text-right" scope="col gray-ish">Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td class="item">Item 1</td>
                                <td>1</td>
                                <td>25 <span class="currency">&euro;</span></td>
                                <td>5 %</td>
                                <td>5 %</td>
                                <td class="text-right">28,75 <span class="currency">&euro;</span></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td class="item">Item 2</td>
                                <td>1</td>
                                <td>25 <span class="currency">&euro;</span> </td>
                                <td></td>
                                <td>5 %</td>
                                <td class="text-right">28,75 <span class="currency">&euro;</span> </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td class="item">Item 3</td>
                                <td>1</td>
                                <td>25 <span class="currency">&euro;</span> </td>
                                <td>13 %</td>
                                <td>5 %</td>
                                <td class="text-right">28,75 <span class="currency">&euro;</span> </td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td class="item">Item 4</td>
                                <td>1</td>
                                <td>25 <span class="currency">&euro;</span></td>
                                <td>5 %</td>
                                <td>5 %</td>
                                <td class="text-right">28,75 <span class="currency">&euro;</span></td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td class="item">Item 5</td>
                                <td>1</td>
                                <td>25 <span class="currency">&euro;</span> </td>
                                <td></td>
                                <td>5 %</td>
                                <td class="text-right">28,75 <span class="currency">&euro;</span> </td>
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td class="item">Item 6</td>
                                <td>1</td>
                                <td>25 <span class="currency">&euro;</span> </td>
                                <td>13 %</td>
                                <td>5 %</td>
                                <td class="text-right">28,75 <span class="currency">&euro;</span> </td>
                            </tr>
                            <tr>
                                <th scope="row">7</th>
                                <td class="item">Item 7</td>
                                <td>1</td>
                                <td>25 <span class="currency">&euro;</span></td>
                                <td>5 %</td>
                                <td>5 %</td>
                                <td class="text-right">28,75 <span class="currency">&euro;</span></td>
                            </tr>
                            <tr>
                                <th scope="row">8</th>
                                <td class="item">Item 8</td>
                                <td>1</td>
                                <td>25 <span class="currency">&euro;</span> </td>
                                <td></td>
                                <td>5 %</td>
                                <td class="text-right">28,75 <span class="currency">&euro;</span> </td>
                            </tr>
                            <tr>
                                <th scope="row">9</th>
                                <td class="item">Item 9</td>
                                <td>1</td>
                                <td>25 <span class="currency">&euro;</span> </td>
                                <td>13 %</td>
                                <td>5 %</td>
                                <td class="text-right">28,75 <span class="currency">&euro;</span> </td>
                            </tr>
                            <tr>
                                <th scope="row">10</th>
                                <td class="item">Item 10</td>
                                <td>1</td>
                                <td>25 <span class="currency">&euro;</span> </td>
                                <td>13 %</td>
                                <td>5 %</td>
                                <td class="text-right">28,75 <span class="currency">&euro;</span> </td>
                            </tr>
                            <tr>
                                <th scope="row">11</th>
                                <td class="item">Item 11</td>
                                <td>1</td>
                                <td>25 <span class="currency">&euro;</span> </td>
                                <td>13 %</td>
                                <td>5 %</td>
                                <td class="text-right">28,75 <span class="currency">&euro;</span> </td>
                            </tr>
                            <tr>
                                <th scope="row">12</th>
                                <td class="item">Item 12</td>
                                <td>1</td>
                                <td>25 <span class="currency">&euro;</span> </td>
                                <td>13 %</td>
                                <td>5 %</td>
                                <td class="text-right">28,75 <span class="currency">&euro;</span> </td>
                            </tr>
                            <tr>
                                <th scope="row">13</th>
                                <td class="item">Item 13</td>
                                <td>1</td>
                                <td>25 <span class="currency">&euro;</span> </td>
                                <td>13 %</td>
                                <td>5 %</td>
                                <td class="text-right">28,75 <span class="currency">&euro;</span> </td>
                            </tr>
                            <tr>
                                <th scope="row">14</th>
                                <td class="item">Item 13</td>
                                <td>1</td>
                                <td>25 <span class="currency">&euro;</span> </td>
                                <td>13 %</td>
                                <td>5 %</td>
                                <td class="text-right">28,75 <span class="currency">&euro;</span> </td>
                            </tr>
                            <tr>
                                <th scope="row">15</th>
                                <td class="item">Item 15</td>
                                <td>1</td>
                                <td>25 <span class="currency">&euro;</span> </td>
                                <td>13 %</td>
                                <td>5 %</td>
                                <td class="text-right">28,75 <span class="currency">&euro;</span> </td>
                            </tr>
                            <tr>
                                <th scope="row">16</th>
                                <td class="item">Item 16</td>
                                <td>1</td>
                                <td>25 <span class="currency">&euro;</span> </td>
                                <td>13 %</td>
                                <td>5 %</td>
                                <td class="text-right">28,75 <span class="currency">&euro;</span> </td>
                            </tr>
                            <tr>
                                <th scope="row">17</th>
                                <td class="item">Item 17</td>
                                <td>1</td>
                                <td>25 <span class="currency">&euro;</span> </td>
                                <td>13 %</td>
                                <td>5 %</td>
                                <td class="text-right">28,75 <span class="currency">&euro;</span> </td>
                            </tr>
                            <tr>
                                <th scope="row">18</th>
                                <td class="item">Item 18</td>
                                <td>1</td>
                                <td>25 <span class="currency">&euro;</span> </td>
                                <td>13 %</td>
                                <td>5 %</td>
                                <td class="text-right">28,75 <span class="currency">&euro;</span> </td>
                            </tr>
                            <tr>
                                <th scope="row">19</th>
                                <td class="item">Item 19</td>
                                <td>1</td>
                                <td>25 <span class="currency">&euro;</span> </td>
                                <td>13 %</td>
                                <td>5 %</td>
                                <td class="text-right">28,75 <span class="currency">&euro;</span> </td>
                            </tr>
                            <tr>
                                <th scope="row">20</th>
                                <td class="item">Item 20</td>
                                <td>1</td>
                                <td>25 <span class="currency">&euro;</span> </td>
                                <td>13 %</td>
                                <td>5 %</td>
                                <td class="text-right">28,75 <span class="currency">&euro;</span> </td>
                            </tr>
                            <tr>
                                <th scope="row">21</th>
                                <td class="item">Item 21</td>
                                <td>1</td>
                                <td>25 <span class="currency">&euro;</span> </td>
                                <td>13 %</td>
                                <td>5 %</td>
                                <td class="text-right">28,75 <span class="currency">&euro;</span> </td>
                            </tr>
                            <tr>
                                <th scope="row">22</th>
                                <td class="item">Item 22</td>
                                <td>1</td>
                                <td>25 <span class="currency">&euro;</span> </td>
                                <td>13 %</td>
                                <td>5 %</td>
                                <td class="text-right">28,75 <span class="currency">&euro;</span> </td>
                            </tr>
                            <tr>
                                <th scope="row">23</th>
                                <td class="item">Item 23</td>
                                <td>1</td>
                                <td>25 <span class="currency">&euro;</span> </td>
                                <td>13 %</td>
                                <td>5 %</td>
                                <td class="text-right">28,75 <span class="currency">&euro;</span> </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row invoice_details">
                <!-- invoiced to details -->
                <div class="col-4 offset-1 pt-3">
                    <h4 class="gray-ish">Invoice Summary & Notes</h4>
                    <p class="pt-3 almost-gray">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras purus sapien, ullamcorper quis orci eu, consectetur congue nulla. In a fermentum est, ornare maximus neque. Phasellus metus risus, mattis ac sapien in, volutpat laoreet lectus.
                        Maecenas tincidunt condimentum quam, ut porttitor dui ultricies nec.</p>
                </div>
                <!-- Invoice assets and total -->
                <div class="offset-1 col-5 mb-3 pr-4 sub-table">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <th scope="row gray-ish">Subtotal</th>
                                <td class="text-right">75 <span class="currency ">&euro;</span></td>
                            </tr>
                            <tr>
                                <th scope="row gray-ish">VAT</th>
                                <td class="text-right">11,25 <span class="currency">&euro;</span></td>
                            </tr>
                            <tr>
                                <th scope="row gray-ish">Taxes*</th>
                                <td class="text-right">11,25 <span class="currency">&euro;</span></td>
                            </tr>
                            <tr>
                                <th scope="row gray-ish">Discounts</th>
                                <td class="text-right">7,5 <span class="currency">&euro;</span></td>
                            </tr>
                            <tr class="last-row">
                                <th scope="row">
                                    <h4>Total</h4>
                                </th>
                                <td class="text-right">
                                    <h4><span class="currency">&euro;</span> 90,25</h4>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <p class="text-center pb-3"><em> Taxes will be calculated in &euro; regarding transport and other taxable services.</em></p>
        </div>
    </main>
    <?php require 'footer.php'?>
    <script src="../public/js/checkout.js"></script>
</body>
</html>