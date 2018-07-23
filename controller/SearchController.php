<?php
include_once "Controller.php";
include_once "model/SearchModel.php";

class SearchController extends Controller{
    function searchResult(){
        $model=new SearchModel;
        $txtSearch=$_POST['search'];
        $idType=$_POST['category_id'];

        $products=$model->searchProduct($idType,$txtSearch);
        // print_r($products);die;
        $data=[
            "products" => $products
        ];
        return $this->loadView("search",$data);
    }
}
?>