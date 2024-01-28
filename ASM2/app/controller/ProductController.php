<?php

namespace App\controller;

use App\model\ProductModel;

class ProductController extends ProductModel
{
    // Hiển thị CRUD ===> GET
    public function C()
    {
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
        }
        require_once "app/view/product/update.php";
    }
    public function D($id)
    {
        if ($id !== null) {
            parent::delete($id);
        }
    }
    // Thực hiện Cre và Upd ===> POST 
    public function Cre()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $name = isset($_POST["name"]) ? $_POST["name"] : '';
            $type = isset($_POST["type"]) ? $_POST["type"] : '';
            $img = isset($_POST["img"]) ? $_POST["img"] : '';
            $des = isset($_POST["des"]) ? $_POST["des"] : '';
            $price = isset($_POST['price']) ? $_POST['price'] : "";
            parent::insert($name,$type,$img,$des,$price);
        }
    }
    public function Upd($id)
    {
        $product = $this->getById($id);
        if ($product) {
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                $name = isset($_POST["name"]) ? $_POST["name"] : '';
                $type = isset($_POST["type"]) ? $_POST["type"] : '';
                $img = isset($_POST["img"]) ? $_POST["img"] : '';
                $des = isset($_POST["des"]) ? $_POST["des"] : '';
                $price = isset($_POST['price']) ? $_POST['price'] : "";
                parent::update($id,$type,$name,$img,$des,$price);
            }
        }
    }
}
