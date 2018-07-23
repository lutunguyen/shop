<?php
include_once "controller/ErrorController.php";

$c=new ErrorController;
return $c->showError();
?>