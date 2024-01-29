<?php

namespace App\model;

use App\model\DB;
use Exception;

class AccountModel extends DB
{
    public function getAll()
    {
        return $this->query("SELECT * FROM account");
    }
    public function getById($id)
    {
        return $this->queryOne(
            "SELECT * FROM account 
            WHERE id = :id", [':id' => $id]
            );
    }
    public function delete($id)
    {
        $this->execute("DELETE FROM account WHERE id = :id", [':id' => $id]);
    }
    public function insert($username,$password,$email,$role)
    {
        $this->execute("
            INSERT INTO account (`username`, `password`, `email`,`role`) 
            VALUES (:username, :password, :email, :role);
        ", [
            ':username' => $username,
            ':password' => $password,
            ':email' => $email,
            ':role'=>$role
        ]);
    }
    public function update($id,$username,$password,$email)
{
    try {
        $this->execute("
        UPDATE account 
        SET username = :username, password = :password, email = :email
        WHERE id = :id;
    ", [
        ':id' => $id,
        ':username' => $username,
        ':password' => $password,
        ':email' => $email,
    ]);
            // có thể add thêm không giới hạn $this->execute
    }
    catch (Exception $e) {
        throw $e;
    }
    }
    public function authenticateUser($username, $password)
    {
        // Implement your authentication logic here
        $sql = "SELECT * FROM account WHERE username = :username AND password = :password";
        $row = $this->queryOne($sql, [':username' => $username, ':password' => $password]);
        if ($row) {
            if ($row['role'] === 0) {echo 'Admin';}
            else{echo'User';}
            return true;
        } else {
            return false;
        }
    }
}
