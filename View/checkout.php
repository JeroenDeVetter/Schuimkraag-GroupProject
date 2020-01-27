<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="Webdevelopment, DeSchuimkraag, Bier, E-shop">
    <meta name="description" content="Checkout pagina">
    <meta name="author" content="Danny, David, Geert, Kristel Jeroen,">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet"> 
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
    <div id="invoiceholder">

<div id="headerimage"></div>
<div id="invoice" class="effect2">
  
  <div id="invoice-top">
    <div class="logo"></div>
    <div class="info">
      <h2>De Schuimkraag</h2>
      <p> schuimkraaggent@gmail.com </br>
          +(32)0476 32 18 61
      </p>
    </div><!--End Info-->
    <div class="title">
      <h1>Factuur #1069</h1>
      <p>Verstrekt: Mei 27, 2020</br>
         Ten laatste te betalen: Juni 27, 2020
      </p>
    </div><!--End Title-->
  </div><!--End InvoiceTop-->


  
  <div id="invoice-mid">
    
    <div class="clientlogo"></div>
    <div class="info">
      <h2>Klantnaam</h2>
      <p>JohnDoe@gmail.com</br>
         555-555-5555</br>
    </div>

    <div id="project">
      <h2>Download as PDF</h2>
      <p><button id="button">PDF</button></p>
    </div>   

  </div><!--End Invoice Mid-->
  
  <div id="invoice-bot">
    
    <div id="table">
      <table>
        <tr class="tabletitle">
          <td class="item"><h2>Item Omschrijving</h2></td>
          <td class="Hours"><h2>Uren</h2></td>
          <td class="Rate"><h2>P.P.U</h2></td>
          <td class="subtotal"><h2>Sub-totaal</h2></td>
        </tr>
        
        <tr class="service">
          <td class="tableitem"><p class="itemtext">Communicatie</p></td>
          <td class="tableitem"><p class="itemtext">5</p></td>
          <td class="tableitem"><p class="itemtext">$75</p></td>
          <td class="tableitem"><p class="itemtext">$375.00</p></td>
        </tr>
        
        <tr class="service">
          <td class="tableitem"><p class="itemtext">Asset Gathering</p></td>
          <td class="tableitem"><p class="itemtext">3</p></td>
          <td class="tableitem"><p class="itemtext">$75</p></td>
          <td class="tableitem"><p class="itemtext">$225.00</p></td>
        </tr>
        
        <tr class="service">
          <td class="tableitem"><p class="itemtext">Design Development</p></td>
          <td class="tableitem"><p class="itemtext">5</p></td>
          <td class="tableitem"><p class="itemtext">$75</p></td>
          <td class="tableitem"><p class="itemtext">$375.00</p></td>
        </tr>
        
        <tr class="service">
          <td class="tableitem"><p class="itemtext">Animatie</p></td>
          <td class="tableitem"><p class="itemtext">20</p></td>
          <td class="tableitem"><p class="itemtext">$75</p></td>
          <td class="tableitem"><p class="itemtext">$1,500.00</p></td>
        </tr>
        
        <tr class="service">
          <td class="tableitem"><p class="itemtext">Animatie Revisie</p></td>
          <td class="tableitem"><p class="itemtext">10</p></td>
          <td class="tableitem"><p class="itemtext">$75</p></td>
          <td class="tableitem"><p class="itemtext">$750.00</p></td>
        </tr>
        
        <tr class="service">
          <td class="tableitem"><p class="itemtext"></p></td>
          <td class="tableitem"><p class="itemtext">HST</p></td>
          <td class="tableitem"><p class="itemtext">13%</p></td>
          <td class="tableitem"><p class="itemtext">$419.25</p></td>
        </tr>
        
          
        <tr class="tabletitle">
          <td></td>
          <td></td>
          <td class="Rate"><h2>Totaal</h2></td>
          <td class="payment"><h2>$3,644.25</h2></td>
        </tr>
        
      </table>
    </div><!--End Table-->

    
  

    
    <div id="legalcopy">
      <p class="legal"><strong>Bedankt voor Uw aankopen !</strong>  Betaling wordt verwacht binnen de 31 dagen; Gelieve deze factuur binnen die termijn te behandelen. Bij het niet binnen de termijn betalen wordt een intrest van 5%/per maand aangerekend. 
      </p>
    </div>
    
  </div><!--End InvoiceBot-->
</div><!--End Invoice-->
</div><!-- End Invoice Holder-->
    </main>
    <?php require 'footer.php'?>
    <script src="../public/js/checkout.js"></script>
</body>
</html>