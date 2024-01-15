<?php
require_once "db.php";
// Hàm lấy dữ liệu 
class Product extends DB
{
    function getProduct()
    {
        $sql = "select*from product";
        return $this->getData($sql);
    }
}
