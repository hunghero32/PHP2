<?php

namespace App\model;

use App\model\DB;
use Exception;

class CouponModel extends DB
{
    public function getAll()
    {
        return $this->query("SELECT * FROM coupon");
    }
    public function getByid($id)
    {
        return $this->queryOne(
            "SELECT * FROM coupon 
            WHERE id = :id", [':id' => $id]
            );
    }
    public function delete($id)
    {
        $this->execute("DELETE FROM coupon WHERE id = :id", [':id' => $id]);
    }
    public function insert($couponCode,$discount,$expiryDate,$createAt)
    {
        $this->execute("
            INSERT INTO coupon (`couponCode`, `discount`, `expiryDate`, `createAt`) 
            VALUES (:couponCode, :discount, :expiryDate, :createAt);
        ", [
            ':couponCode' => $couponCode,
            ':discount' => $discount,
            ':expiryDate' => $expiryDate,
            ':createAt' => $createAt
        ]);
    }
    public function update($id,$couponCode,$discount,$expiryDate,$createAt)
{
    try {
        $this->execute("
        UPDATE coupon 
        SET couponCode = :couponCode, discount = :discount, expiryDate = :expiryDate, createAt = :createAt
        WHERE id = :id;
    ", [
        ':id' => $id,
        ':couponCode' => $couponCode,
        ':discount' => $discount,
        ':expiryDate' => $expiryDate,
        ':createAt' => $createAt
    ]);
            // có thể add thêm không giới hạn $this->execute
    }
    catch (Exception $e) {
        throw $e;
    }
    }
}
