<?php
include_once "Connect.php";

class CheckoutModel extends Connect{
    function insertIntoCustomers($name,$gender,$email,$address,$phone){
        $sql="INSERT INTO customers(name,gender,email,address,phone)
            VALUES('$name','$gender','$email','$address','$phone')";
        return $this->executeQuery($sql);
    }

    function insertIntoBills($idCustomer,$dateOrder,$totalPrice,$promtPrice,$paymentMethod,$note){
        $sql="INSERT INTO bills(id_customer,date_order,total,promt_price,payment_method,note,status)
            VALUES($idCustomer,'$dateOrder',$totalPrice,$promtPrice,'$paymentMethod','$note',0)";
        return $this->executeQuery($sql);
    }

    function getId(){
        return $this->getInsertId();
    }

    function insertIntoBillDetail($idBill,$idProduct,$qty,$price){
        $sql="INSERT INTO bill_detail(id_bill,id_product,quantity,price)
            VALUES($idBill,$idProduct,$qty,$price)";
            return $this->executeQuery($sql);
    }
}
?>