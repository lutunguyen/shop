<?php
include_once "Connect.php";

class TypeModel extends Connect{

    function getProductsByType($type,$position=-1,$qty=-1){
        $sql="SELECT p.*,u.url
            FROM products p
            INNER JOIN page_url u
            ON p.id_url=u.id
            WHERE p.id_type=(SELECT c.id
                FROM categories c
                INNER JOIN page_url u2
                ON c.id_url=u2.id
                WHERE u2.url='$type')";
        if($position>=0 || $qty>=0){
            $sql.="LIMIT $position,$qty";
        }
        return $this->loadMoreRows($sql);
    }

    function getTypeByUrl($url){
        $sql="SELECT c.name,c.id
            FROM categories c
            INNER JOIN page_url u
            ON c.id_url=u.id
            WHERE u.url='$url'";
        return $this->loadOneRow($sql);
    }

    function getProductsByIdType($idType){
        $sql="SELECT p.*,u.url
            FROM products p
            INNER JOIN page_url u
            ON p.id_url=u.id
            WHERE p.id_type=(SELECT id
                FROM categories
                WHERE id=$idType)";
        return $this->loadMoreRows($sql);
    }

    function getAllProducts($position=-1,$qty=-1){
        $sql="SELECT p.*,u.url
            FROM products p
            INNER JOIN page_url u
            ON p.id_url=u.id";
        if($position>=0 || $qty>=0) $sql.="LIMIT $position,$qty";
        return $this->loadMoreRows($sql);
    }

    function getProductsByPrice($priceLevel){
        $sql="SELECT p.*,u.url
            FROM products p
            INNER JOIN page_url u
            ON p.id_url=u.id WHERE p.price ";
        switch($priceLevel){
            case "1":$sql.="<5000000";break;
            case "2":$sql.="BETWEEN 5000000 AND 10000000";break;
            case "3":$sql.="BETWEEN 10000000 AND 15000000";break;
            case "4":$sql.="BETWEEN 15000000 AND 20000000";break;
            default:$sql.=">20000000";break;
        }
        return $this->loadMoreRows($sql);
    }

    function getProductsByTypeAndPrice($type,$priceLevel){
        $sql="SELECT p.*,u.url
            FROM products p
            INNER JOIN page_url u
            ON p.id_url=u.id
            WHERE p.id_type=(SELECT c.id
                FROM categories c
                INNER JOIN page_url u2
                ON c.id_url=u2.id
                WHERE u2.url='$type') AND p.price ";
        switch($priceLevel){
            case "1":$sql.="<5000000";break;
            case "2":$sql.="BETWEEN 5000000 AND 10000000";break;
            case "3":$sql.="BETWEEN 10000000 AND 15000000";break;
            case "4":$sql.="BETWEEN 15000000 AND 20000000";break;
            default:$sql.=">20000000";break;
        }
        return $this->loadMoreRows($sql);
    }
}
?>