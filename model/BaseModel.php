<?php
include_once "Connect.php";

class BaseModel extends Connect{
    function setCategories(){
        $sql="SELECT c.*,u.url,count(p.id) as SoLuong
            FROM categories c
            INNER JOIN page_url u
            ON c.id_url=u.id
            INNER JOIN products p
            ON c.id=p.id_type
            GROUP BY c.id";
        return $this->loadMoreRows($sql);
    }

}
?>