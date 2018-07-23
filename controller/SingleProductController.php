<?php
include_once "Controller.php";
include_once "model/Single_productModel.php";

class SingleProductController extends Controller{
    function getSingleProduct(){
        $model=new Single_productModel;
        $id_product=$_GET['id'];

        $productDetail=$model->productDetail($id_product);
        $relatedProduct=$model->getRelatedProduct($id_product);
        $data=[
            "productDetail" => $productDetail,
            "relatedProduct" => $relatedProduct
        ];
        return $this->loadView('Single_product',$data);
    }
}
?>