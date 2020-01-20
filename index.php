<?php

//do things here like enabling errors, starting session...
switch($_GET['controller']) {
    case 'Shoppingcart':
        $controller = new ShoppingcartController();
        break;
    default:
        //load homepage
}
$controller->view();