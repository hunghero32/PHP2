<?php 
    require_once "models/product.php";
    class ProductController extends Product{
    function listProduct(){
        // $obj = new Product();
        $product= $this->getProduct();
        // var_dump($product);
        require_once "views/list.php";
    }}
    ?>