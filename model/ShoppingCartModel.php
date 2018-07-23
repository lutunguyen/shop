<?php
include_once "Connect.php";
include_once "helpers/Cart.php";

class ShoppingCartModel extends Connect{
    function findProductById($id){
        $sql="SELECT id,name,image,promotion_price,price
            FROM products WHERE id=$id";
        return $this->loadOneRow($sql);
    }
}
?>