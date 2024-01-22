<?php
namespace App\models;
// require_once "db.php";
use App\models\DB;
// Hàm lấy dữ liệu 
class Product extends DB
{
    function getProduct()
    {
        $sql = "select*from product";
        return $this->getData($sql);
    }
}
