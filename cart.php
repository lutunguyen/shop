<?php
include_once "controller/ShoppingCartController.php";

$c=new ShoppingCartController;
if(isset($_POST['action']) && $_POST['action']=='delete') return $c->removeCart();
elseif(isset($_POST['action']) && $_POST['action']=='update') return $c->updateCart();
elseif(isset($_POST['action']) && $_POST['action']=='layoutLoadCart') return $c->layoutLoadCart();
else return $c->addToCart();
?>