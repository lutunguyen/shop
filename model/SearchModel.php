<?php
include_once "Connect.php";

class SearchModel extends Connect{
    function searchProduct($idType,$txtSearch){
        $sql="SELECT p.*,u.url
            FROM products p
            INNER JOIN page_url u
            ON p.id_url=u.id
            WHERE p.name LIKE '%$txtSearch%'";
        if($idType!=0) $sql.=" AND p.id_type=$idType";
        return $this->loadMoreRows($sql);
    }
}
?>