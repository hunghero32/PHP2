<?php

namespace App\model;

use App\model\DB;
use Exception;

class TypeModel extends DB
{
    public function getAll()
    {
        return $this->query("SELECT * FROM type");
    }
    public function getById($id)
    {
        return $this->queryOne(
            "SELECT * FROM type 
            WHERE id = :id", [':id' => $id]
            );
    }
    public function delete($id)
    {
        $this->execute("DELETE FROM type WHERE id = :id", [':id' => $id]);
    }
    public function insert($type)
    {
        $this->execute("
            INSERT INTO type (`type`) 
            VALUES (:type);
        ", [
            ':type' => $type,
        ]);
    }
    public function update($id,$type)
{
    try {
        $this->execute("
        UPDATE type 
        SET type = :type
        WHERE id = :id;
    ", [
        ':id' => $id,
        ':type' => $type,
    ]);
            // có thể add thêm không giới hạn $this->execute
    }
    catch (Exception $e) {
        throw $e;
    }
    }
}
