<?php
include_once "Controller.php";
include_once "model/TypeModel.php";
include_once "model/BaseModel.php";
include_once "helpers/Pager.php";
include_once "helpers/Cart.php";
session_start();

class TypeController extends Controller{

    function getType(){
        $model=new TypeModel;
        $type=$_GET['url'];

        if(isset($_GET['page']) && is_numeric($_GET['page']) && $_GET['page']>0) $page=$_GET['page'];
        else $page=1;

        $qty=9;
        $position=$qty*($page-1);
        
        //Neu client ko xem theo gia cua tung chung loai thi chi show ra tat ca sp cua chung loai do
        if(!isset($_GET['price'])) $productsByType=$model->getProductsByType($type,$position,$qty);
        //Neu client xem theo gia cua tung chung loai thi chi show ra nhung san pham trong vung gia cua chung loai do
        else $productsByType=$model->getProductsByTypeAndPrice($type,$_GET['price']);
        
        $getType=$model->getTypeByUrl($type);

        $BModel=new BaseModel;
        $categories=$BModel->setCategories();

        $tongSP=count($model->getProductsByType($type));

        $allProducts=count($model->getAllProducts());
        $pager=new Pager($tongSP,$page,$qty,3);
        $showPagination=$pager->showPagination();

        //Count product by price
        $soSP1=count($model->getProductsByPrice(1));
        $soSP2=count($model->getProductsByPrice(2));
        $soSP3=count($model->getProductsByPrice(3));
        $soSP4=count($model->getProductsByPrice(4));
        $soSP5=count($model->getProductsByPrice(5));

        //Shopping cart
        if(isset($_SESSION['cart'])) $oldCart=$_SESSION['cart'];
        else $oldCart=null;

        $cart=new Cart($oldCart);
        // print_r($cart);die();

        $data=[
            "productsByType" => $productsByType,
            "nameType" => $getType->name,
            "idType" => $getType->id,
            "categories" => $categories,
            "allProducts" => $allProducts,
            "showPagination" => $showPagination,
            "soSP1" => $soSP1,
            "soSP2" => $soSP2,
            "soSP3" => $soSP3,
            "soSP4" => $soSP4,
            "soSP5" => $soSP5,
            "cart" => $cart
        ];
        return $this->loadView("type",$data);
    }

    function getProductsByTypeAjax(){
        $idType=$_GET['id'];
        $model=new TypeModel;
        
        if($idType!=0){ $products=$model->getProductsByIdType($idType);}
        else{
            $products=$model->getAllProducts();
        }

        $data=[
            "products" => $products
        ];
        return $this->callViewAjax("products",$data);
    }

    function getProductsByPriceAjax(){
        $priceLevel=$_GET['priceLevel'];
        
        $model=new TypeModel;
        $products=$model->getProductsByPrice($priceLevel);
        $data=[
            "products" => $products
        ];
        return $this->callViewAjax("products",$data);
    }

}
?>