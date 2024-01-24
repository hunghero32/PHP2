<?php 
    namespace App\controller;

    // require_once "app/models/product.php";
    use App\models\Product;
    class ProductController extends Product{
    function listProduct(){
        // $obj = new Product();
        $product= $this->getProduct();
        // var_dump($product);
        require_once "app/views/list.php";
    }
    function testController(){
        echo "Hello";
    }
}
    ?>