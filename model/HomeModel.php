<?php
include_once "Connect.php";

class HomeModel extends Connect{
    function getSlide(){
        $sql="SELECT * FROM slide WHERE status=1";
        return $this->loadMoreRows($sql);
    }

    //Feature products: san pham noi bat
    function getFeatureProducts(){
        $sql="SELECT p.*,u.url
            FROM products p
            INNER JOIN page_url u
            ON p.id_url=u.id
            WHERE status=1";
        return $this->loadMoreRows($sql);
    }

    function getBestSeller($type=-1){
        $sql="SELECT p.*,u.url,sum(d.quantity) as SoLuong
            FROM bill_detail d
            INNER JOIN products p
            ON p.id=d.id_product
            INNER JOIN page_url u
            ON p.id_url=u.id
            GROUP BY id_product 
            ORDER BY SoLuong DESC ";
        //Mac dinh la -1 la lay 10 san pham, neu khac -1 thi chi lay 3 san pham
        if($type==-1) $sql.="LIMIT 0,10";
        else $sql.="LIMIT 0,3";
        return $this->loadMoreRows($sql);
    }

    function getPromotionProducts($type=-1){
        $sql="SELECT p.*,u.url
            FROM products p
            INNER JOIN page_url u
            ON p.id_url=u.id
            WHERE p.promotion_price!=0 AND p.promotion_price<p.price ";
        if($type==-1) $sql.="LIMIT 0,10";
        else $sql.="LIMIT 0,3";
        return $this->loadMoreRows($sql);
    }
}
?>