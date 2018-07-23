<?php
include_once "Controller.php";
include_once "model/ShoppingCartModel.php";
include_once "helpers/Cart.php";
session_start();

class ShoppingCartController extends Controller{
    function getShoppingCart(){
        if(isset($_SESSION['cart'])) $data=$_SESSION['cart'];
        else $data=null;
        //print_r($data);die();
        return $this->loadView("shopping_cart",$data);
    }

    function addToCart(){
        $id=$_POST['id'];
        $model=new ShoppingCartModel;
        $product=$model->findProductById($id);

        if(isset($_POST['qty'])) $qty=$_POST['qty'];
        else $qty=1;

        if(isset($_SESSION['cart'])) $oldCart=$_SESSION['cart'];
        else $oldCart=null;

        $cart=new Cart($oldCart);
        $cart->add($product,$qty);
        
        $_SESSION['cart']=$cart;
        //echo $product->name;
        
        //Update lai gio hang trong layout
        if($cart->promtPrice!=0){
            $totalPrice=number_format($cart->promtPrice);
        }else{
            $totalPrice=number_format($cart->totalPrice);
        }

        $_SESSION['cartQty']=$cart->totalQty." sản phẩm";
        $_SESSION['cartTitle']="Giỏ hàng của bạn:";
        $_SESSION['cartPrice']=$totalPrice;
        //print_r($_SESSION['totalQty']);die;
        echo json_encode([
            "name" => $product->name,
            "cartTitle" => "Giỏ hàng của bạn:",
            "cartQty" => $cart->totalQty." sản phẩm: ",
            "cartPrice" => $totalPrice
        ]);

    }

    function removeCart(){
        $id=$_POST['id'];

        if(isset($_SESSION['cart'])) $oldCart=$_SESSION['cart'];
        else $cart=null;

        $cart=new Cart($oldCart);
        $cart->removeItem($id);
        $_SESSION['cart']=$cart;
        
        //Update lai gio hang trong layout
        if($cart->promtPrice!=0){
            $totalPrice=number_format($cart->promtPrice);
        }else{
            $totalPrice=number_format($cart->totalPrice);
        }

        //Neu client xoa het cac san pham thi se xoa het SESSION
        if($cart->totalQty==0){
            unset($_SESSION['cartQty']);
            unset($_SESSION['cartTitle']);
            unset($_SESSION['cartPrice']);
        }else{
            $_SESSION['cartQty']=$cart->totalQty." sản phẩm: ";
            $_SESSION['cartTitle']="Giỏ hàng của bạn:";
            $_SESSION['cartPrice']=$totalPrice;
        }
            echo json_encode([
                "totalPrice" => number_format($cart->totalPrice),
                "promtPrice" => number_format($cart->promtPrice),
                "cartTitle" => "Giỏ hàng của bạn:",
                "cartQty" => $cart->totalQty." sản phẩm: ",
                "cartPrice" => $totalPrice
            ]);
    }

    function updateCart(){
        $id=$_POST['id'];
        $qty=$_POST['soLuong'];
        
        $model=new ShoppingCartModel;
        $product=$model->findProductById($id);
        //print_r($product);die;
        if(isset($_SESSION['cart'])) $oldCart=$_SESSION['cart'];
        else $oldCart=null;
        $cart=new Cart($oldCart);
        $cart->update($product, $qty);
        $_SESSION['cart']=$cart;

        //Update lai gio hang trong layout
        if($cart->promtPrice!=0){
            $totalPrice=number_format($cart->promtPrice);
        }else{
            $totalPrice=number_format($cart->totalPrice);
        }
        
        $_SESSION['cartQty']=$cart->totalQty." sản phẩm: ";
        $_SESSION['cartTitle']="Giỏ hàng của bạn:";
        $_SESSION['cartPrice']=$totalPrice;

        echo json_encode([
            "totalPrice" => number_format($cart->totalPrice),
            "promtPrice" => number_format($cart->promtPrice),
            "totalPriceByOne" => number_format($product->price*$qty),
            "promtPriceByOne" => number_format($product->promotion_price*$qty),
            "cartTitle" => "Giỏ hàng của bạn:",
            "cartQty" => $cart->totalQty." sản phẩm: ",
            "cartPrice" => $totalPrice
        ]);
    }

}
?>