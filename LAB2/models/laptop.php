<?php
require_once "db.php";

// Hàm lấy dữ liệu
function getLaptop(){
    $sql = "SELECT * FROM laptop";
    return getData($sql);
}

// Hàm thêm dữ liệu
function addLaptop($data){
    $table = "laptop";
    return insertData($table, $data);
}

// Hàm sửa dữ liệu
function updateLaptop($data, $condition){
    $table = "laptop";
    return updateData($table, $data, $condition);
}

// Hàm xóa dữ liệu
function deleteLaptop($condition){
    $table = "laptop";
    return deleteData($table, $condition);
}

// Sử dụng các hàm:
// Lấy dữ liệu: $laptops = getLaptop();
// Thêm dữ liệu: addLaptop(["column1" => "value1", "column2" => "value2"]);
// Sửa dữ liệu: updateLaptop(["column1" => "new_value"], "id = 1");
// Xóa dữ liệu: deleteLaptop("id = 1");
?>
