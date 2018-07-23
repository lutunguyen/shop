<?php

class Connect{

    private $conn;

    function __construct($host="localhost",$dbname="apple2",$user="root",$password=""){
        try{
            $this->conn=new PDO("mysql:host=$host;dbname=$dbname",$user,$password);
            $this->conn->exec("set names UTF8");
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    function setStatement($sql,$params=[]){
        $stmt=$this->conn->prepare($sql);
        if(count($params)>0){
            for($i=0;$i<=count($params);$i++){
                $stmt->bindValue($i+1,$params[$i]);
            }
        }
        return $stmt;
    }

    function executeQuery($sql,$params=[]){
        $stmt=$this->setStatement($sql,$params);
        return $stmt->execute();
    }

    //Lay id vua moi insert xong
    function getInsertId(){
        $id=$this->conn->lastInsertId();
        return $id;
    }

    function loadOneRow($sql,$params=[]){
        $stmt=$this->setStatement($sql,$params);
        $check=$stmt->execute();
        if($check){
            return $stmt->fetch(PDO::FETCH_OBJ);
        }
        else return false;
    }

    function loadMoreRows($sql,$params=[]){
        $stmt=$this->setStatement($sql,$params);
        $check=$stmt->execute();
        if($check){
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }
        else return false;
    }
}
?>