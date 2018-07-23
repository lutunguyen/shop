<?php
include_once "model/BaseModel.php";


class Controller{
    function loadView($nameView,$data=[]){
        $model=new BaseModel;
        $categories=$model->setCategories();

        include_once "view/layout.view.php";
    }

    function callViewAjax($nameView,$data=[]){
        include_once "view/ajax/$nameView.php";
    }
}
?>