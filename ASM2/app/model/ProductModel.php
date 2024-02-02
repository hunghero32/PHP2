<?php

namespace App\model;

use App\model\DB;
use Exception;

class ProductModel extends DB
{
    public function getAll()
    {
        return $this->query("
        SELECT product.*,type.type
        FROM product
        JOIN type ON product.type = type.id
    ");
    }
    public function getById($id)
    {
        return $this->queryOne("
        SELECT product.*, type.type
        FROM product
        JOIN type ON product.type = type.id
        WHERE product.id = :id
            ", [':id' => $id]
            );
    }
    public function delete($id)
    {
        $this->execute("DELETE FROM product WHERE id = :id", [':id' => $id]);
    }
    public function insert($name, $type, $img, $des, $price)
    {
        $this->execute("
            INSERT INTO product (`name`, `img`, `type`, `des`, `price`)
            VALUES (:name, :img, :type, :des, :price);
        ", [
            ':name' => $name,
            ':img' => $img,
            ':type' => $type,
            ':des' => $des,
            ':price' => $price
        ]);
        
    }
    
    public function update($id,$type,$name,$img,$des,$price)
{
    try {
        $this->execute("
        UPDATE product 
        SET type = :type, name = :name, img = :img, des = :des, price = :price
        WHERE id = :id;
    ", [
        ':id' => $id,
        ':type' => $type,
        ':name' => $name,
        ':img' => $img,
        ':des' => $des,
        ':price' => $price
    ]);
    }
    catch (Exception $e) {
        throw $e;
    }
    }
// public function uploadImage($img)
// {
//     $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];
//     $imgExtension = strtolower(pathinfo($img['name'], PATHINFO_EXTENSION));

//     if ($img['name'] !== "" && in_array($imgExtension, $allowedTypes)) {
//         // Đường dẫn đầy đủ tới thư mục uploads
//         $uploadDir ='assets/uploads/';

//         // Tên file gốc
//         $imgName = $img['name'];
//         $imgPath = $uploadDir . $imgName;

//         if (move_uploaded_file($img['tmp_name'], $imgPath)) {
//             // Trả về một mảng chứa thông tin về ảnh
//             return [
//                 'path' => $imgPath,
//                 'name' => $imgName,
//                 'extension' => $imgExtension,
//                 'size' => $img['size'],
//                 'mime' => $img['type']
//             ];
//         }
//     }

//     // Trả về mảng rỗng nếu có lỗi hoặc không phải loại file hỗ trợ
//     return [];
// }
public function uploadImage($img)
{
    // Kiểm tra nếu không có ảnh mới được tải lên hoặc không phải là một loại tệp tin ảnh hợp lệ
    if (!isset($img['name']) || $img['name'] === "" || !in_array(strtolower(pathinfo($img['name'], PATHINFO_EXTENSION)), ['jpg', 'jpeg', 'png', 'gif'])) {
        // Trả về null
        return null;
    }

    // Đường dẫn đầy đủ tới thư mục uploads
    $uploadDir ='assets/uploads/';

    // Tên file gốc
    $imgName = $img['name'];
    $imgPath = $uploadDir . $imgName;

    if (move_uploaded_file($img['tmp_name'], $imgPath)) {
        // Trả về một mảng chứa thông tin về ảnh
        return [
            'path' => $imgPath,
            'name' => $imgName,
            'extension' => strtolower(pathinfo($img['name'], PATHINFO_EXTENSION)),
            'size' => $img['size'],
            'mime' => $img['type']
        ];
    }

    // Trả về null nếu có lỗi khi di chuyển ảnh
    return null;
}

}
