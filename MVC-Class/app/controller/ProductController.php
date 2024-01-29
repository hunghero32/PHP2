<?php 
    namespace App\controller;

    // require_once "app/models/product.php";
    use App\models\Product;
    use eftec\bladeone\BladeOne;
    class ProductController extends Product{
        public $views;
        function __construct(){
            $views = "app/views";
            $cache = "app/cache";
            $this->views = new BladeOne($views, $cache,BladeOne::MODE_AUTO);
        }
    function listProduct(){
        // $obj = new Product();
        $product= $this->getProduct();
        // var_dump($product);
        // require_once "app/views/list.php";
        return $this->views->run('product.show',['pro'=>$product]);

    }
    function testController(){
        echo "Hello";
    }
}
    ?>