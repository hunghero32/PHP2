<?php

namespace App\controller;

use App\model\ProductModel;
use App\Model\TypeModel;
// $TypeModel = new TypeModel;
class ProductController extends ProductModel
{

    // Hiển thị CRUD ===> GET
    public function C()
    {
        $type = (new TypeModel)->getAll();
        require_once "app/view/product/add.php";
    }
    public function R()
    {
        $product = parent::getAll();

        require_once "app/view/product/list.php";
    }
    public function U($id)
    {
        if ($id !== "") {
            $product = $this->getById($id);
            $type = (new TypeModel)->getAll();
        }
        require_once "app/view/product/update.php";
    }
    public function D($id)
    {
        if ($id !== null) {
            parent::delete($id);
        }
        echo '<script>
        window.location.href="/PHP2/Test%20ASM2/Plist";
        </script>';
    }
    // Thực hiện Cre và Upd ===> POST 
    public function Cre()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $name = isset($_POST["name"]) ? $_POST["name"] : '';
            $type = isset($_POST["type"]) ? $_POST["type"] : '';
            $des = isset($_POST["des"]) ? $_POST["des"] : '';
            $price = isset($_POST['price']) ? $_POST['price'] : "";
    
            $img = isset($_FILES["img"]) ? $_FILES["img"] : null;
    
            $imgInfo = $this->uploadImage($img);
            $imgPath = isset($imgInfo['path']) ? $imgInfo['path'] : '';
            
            if ($this->isValidImage($imgPath)) {
                // Thực hiện insert
                parent::insert($name, $type, $imgPath, $des, $price);
            } else {
                echo 'Invalid image type.';
            }
        }
    
        echo '<script>
        window.location.href="/PHP2/Test%20ASM2/Plist";
        </script>';
    }
    
    public function Upd($id)
    {
        $product = $this->getById($id);
        if ($product) {
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                $name = isset($_POST["name"]) ? $_POST["name"] : '';
                $type = isset($_POST["type"]) ? $_POST["type"] : '';
                $des = isset($_POST["des"]) ? $_POST["des"] : '';
                $price = isset($_POST['price']) ? $_POST['price'] : "";
    
                $img = isset($_FILES["img"]) ? $_FILES["img"] : null;
    
                $imgInfo = $this->uploadImage($img);
                $imgPath = isset($imgInfo['path']) ? $imgInfo['path'] : '';
    
                if ($this->isValidImage($imgPath)) {
                    // Thực hiện update
                    parent::update($id, $type, $name, $imgPath, $des, $price);
                } else {
                    echo 'Invalid image type.';
                }
            }
        }
    
        echo '<script>
        window.location.href="/PHP2/Test%20ASM2/Plist";
        </script>';
    }
    
    public function isValidImage($imgPath)
{
    return exif_imagetype($imgPath) !== false;
}
}
