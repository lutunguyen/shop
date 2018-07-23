<?php
include_once "Connect.php";

class Single_productModel extends Connect{
    function productDetail($id_product){
        $sql="SELECT * FROM products WHERE id=$id_product";
        return $this->loadOneRow($sql);
    }

    function getRelatedProduct($id_product){
        $sql="SELECT p.*,u.url
            FROM products p
            INNER JOIN page_url u
            ON p.id_url=u.id
            WHERE p.id_type=(SELECT p2.id_type 
            FROM products p2 
            WHERE p2.id=$id_product) AND p.id != $id_product
            LIMIT 0,6";
        return $this->loadMoreRows($sql);
    }
}
?>