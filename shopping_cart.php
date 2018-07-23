<?php
include_once "controller/ShoppingCartController.php";

$s=new ShoppingCartController;
return $s->getShoppingCart();
?>
