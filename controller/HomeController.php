<?php
include "Controller.php";
include_once "model/HomeModel.php";

class HomeController extends Controller{
    function index(){
        $model=new HomeModel;
        $slide=$model->getSlide();
        $featureProducts=$model->getFeatureProducts();
        $bestSeller=$model->getBestSeller();
        //bestSeller2 dung de show san pham gan footer
        $bestSeller2=$model->getBestSeller(1);

        $promotionProducts=$model->getPromotionProducts();
        //promotionProducts2 dung de show san pham gan footer
        $promotionProducts2=$model->getPromotionProducts(1);

        $data=[
            "slide" => $slide,
            "featureProducts" => $featureProducts,
            "bestSeller" => $bestSeller,
            "bestSeller2" => $bestSeller2,
            "promotionProducts" => $promotionProducts,
            "promotionProducts2" => $promotionProducts2
        ];
        return $this->loadView("index",$data);
    }
}
?>