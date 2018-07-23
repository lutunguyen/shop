<?php
include_once "Controller.php";

class ErrorController extends Controller{
    function showError(){
        return $this->loadView('404error');
    }
}
?>