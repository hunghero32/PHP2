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
    public function getImg($id)
    {
        return $this->queryOne("
        SELECT img
        FROM product
        WHERE id = :id
            ", [':id' => $id]
            );
    }
    public function deleteImg($id)
    {
        $this->execute("DELETE FROM product WHERE id = :id", [':id' => $id]);
    }
}
