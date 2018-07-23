<?php
include_once "Controller/CheckoutController.php";

$c=new CheckoutController;
return $c->getCheckout();
?>