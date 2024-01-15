<?php 
require_once "db.php";
// Hàm lấy dữ liệu 
function getProduct(){
    $sql = "select*from product";
    return getData($sql);
}
?>