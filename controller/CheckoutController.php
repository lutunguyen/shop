<?php
include_once "Controller.php";
include_once "model/CheckoutModel.php";
include_once "helpers/Cart.php";
session_start();

class CheckoutController extends Controller{
    function getCheckout(){
        return $this->loadView("checkout");
    }

    function continue(){
        $model=new CheckoutModel;
        //Them vao bang customers
        $model->insertIntoCustomers($_POST['name'],$_POST['gender'],$_POST['email'],$_POST['address'],$_POST['phone']);

        //Them vao bang bills
        if(isset($_SESSION['cart'])) $oldCart=$_SESSION['cart'];
        else $oldCart=null;

        $cart=new Cart($oldCart);
        // print_r($cart);die();
        $dateOrder=date("Y-m-d",time());
        $totalPrice=$cart->totalPrice;
        $promtPrice=$cart->promtPrice;
        $paymentMethod="COD";
        $note=$_POST['note'];
        $idCustomer=$model->getId();
        //echo $idCustomer;
        //echo $dateOrder;
        $model->insertIntoBills($idCustomer,$dateOrder,$totalPrice,$promtPrice,$paymentMethod,$note);

        //Them vao bang bill_detail
        $idBill=$model->getId();
        foreach($cart->items as $c){
            $idProduct=$c['item']->id;
            $qty=$c['qty'];
            if($c['item']->promotion_price < $c['item']->price) $price=$c['item']->promotion_price;
            else $price=$c['item']->price;
            $model->insertIntoBillDetail($idBill,$idProduct,$qty,$price);
        }
        
        unset($_SESSION['cart']);
        echo "Đã hoàn tất đặt hàng!";
    }
}
?>