<?php
namespace App\model;
use App\model\DB;
use Exception;
class PetModel extends DB
{
    public function getAllPets()
    {
        return $this->query(
            "SELECT * FROM pets"
        );
    }

    public function getPetById($id)
    {
        return $this->queryOne(
            "SELECT * FROM pets
            WHERE id = :id", [':id' => $id]
            );
    }

    public function insertPet($loai, $mota, $soluong, $gia)
    {
        $this->execute("
            INSERT INTO pets (`loai`, `mota`, `soluong`,`gia`) 
            VALUES (:loai, :mota, :soluong, :gia);
        ", [
            ':loai' => $loai,
            ':mota' => $mota,
            ':soluong' => $soluong,
            ':gia' => $gia
        ]);
    }

    public function deletePet($id)
    {
        $this->execute("DELETE FROM pets WHERE id = :id", [':id' => $id]);
    }
public function updatePets($id,$loai, $mota, $soluong, $gia)
{
    try {
        $this->execute("
        UPDATE account 
        SET loai = :loai, mota = :mota, soluong = :soluong, gia = :gia
        WHERE id = :id;
    ", [
        ':id' => $id,
        ':loai' => $loai,
        ':mota' => $mota,
        ':soluong' => $soluong,
        ':gia' => $gia
    ]);
    }
    catch (Exception $e) {
        throw $e;
    }
    }
}