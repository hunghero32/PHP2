<?php 
    require_once "controller/product.php";
    // điều hướng các phương thức từ controller
    $url = isset($_GET["url"])==true ?$_Get ["url"]:"/";
    switch ($url){
        case "/";
        listProduct();
        break;
    }
?>