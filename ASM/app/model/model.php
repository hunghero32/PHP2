<?php

namespace App\model;

use App\model\DB;
use Exception;

class Model extends DB
{
    public function getAll()
    {
        return $this->query("SELECT * FROM table");
    }
    public function getById($id)
    {
        return $this->queryOne(
            "SELECT * FROM table 
            WHERE id = :id", [':id' => $id]
            );
    }
    public function delete($id)
    {
        $this->execute("DELETE FROM table WHERE id = :id", [':id' => $id]);
    }
    public function insert($test,$test2,$test3)
    {
        $this->execute("
            INSERT INTO table (`test`, `test2`, `test3`) 
            VALUES (:test, :test2, :test3);
        ", [
            ':test' => $test,
            ':test2' => $test2,
            ':test3' => $test3,
        ]);
    }
    public function update($id,$test,$test2,$test3)
{
    try {
        $this->execute("
        UPDATE table 
        SET test = :test, test2 = :test2, test3 = :test3
        WHERE id = :id;
    ", [
        ':id' => $id,
        ':test' => $test,
        ':test2' => $test2,
        ':test3' => $test3
    ]);
            // có thể add thêm không giới hạn $this->execute
    }
    catch (Exception $e) {
        throw $e;
    }
    }
}
