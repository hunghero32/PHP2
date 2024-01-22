<?php 
    // require_once "app/controller/product.php";
    require 'vendor/autoload.php';
    use App\controller\ProductController;
    // điều hướng các phương thức từ controller
    $url = isset($_GET["url"])==true ?$_Get ["url"]:"/";
    switch ($url){
        case "/";
        $objPr=new ProductController();
        $objPr->listProduct();
        break;
    }
?>