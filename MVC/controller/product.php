<?php 
    require_once "models/product.php";
    function listProduct(){
        $product = getProduct();
        // var_dump($product);
        require_once "views/list.php";
    }
    ?>