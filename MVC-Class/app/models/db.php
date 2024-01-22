<?php
namespace App\models;
require_once "env.php";
use PDO;
class DB
{
    // Hàm kết nối
    function getConnect()
    {
        $connect = new PDO("mysql:host=" . HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET, DB_USER, DB_PASSWORD);
        return $connect;
    }

    // Hàm lấy dữ liệu 
    // nếu $getAll=true => trả về list 
    // nếu $getAll=false => thực hiện chức năng thêm sửa xóa 
    function getData($query, $getAll = true)
    {
        $conn = $this->getConnect();
        $stmt = $conn->prepare($query);
        $stmt->execute();
        if ($getAll) {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } else {
            return $stmt->fetch();
        }
    }
}
