<?php
require_once 'db.php';

class UserManager extends DB
{
    public function getAllAccounts()
    {
        return $this->query(
            "SELECT account.*, info.*
            FROM account
            JOIN info ON account.id = info.idacc"
        );
    }

    public function getAccountById($id)
    {
        return $this->queryOne(
            "SELECT account.*, info.*
            FROM account
            JOIN info ON account.id = info.idacc
            WHERE info.id = :id", [':id' => $id]
            );
    }

    public function insertAccount($username, $password, $phone, $email, $name, $birthday, $gender, $address)
    {
        $this->execute("
            INSERT INTO account (`username`, `password`, `phone`, `email`) 
            VALUES (:username, :password, :phone, :email);
            INSERT INTO info (`idacc`, `name`, `birthday`, `gender`, `address`) 
            SELECT LAST_INSERT_ID(), :name, :birthday, :gender, :address;
        ", [
            ':username' => $username,
            ':password' => $password,
            ':phone' => $phone,
            ':email' => $email,
            ':name' => $name,
            ':birthday' => $birthday,
            ':gender' => $gender,
            ':address' => $address
        ]);
    }

    public function deleteAccount($id)
    {
        $this->execute("DELETE FROM info WHERE id = :id", [':id' => $id]);
    }
public function updateAccount($id, $username, $password, $phone, $email, $name, $birthday, $gender, $address)
{
    try {
        $this->execute("
        UPDATE account 
        SET username = :username, password = :password, phone = :phone, email = :email
        WHERE id = :id;
    ", [
        ':id' => $id,
        ':username' => $username,
        ':password' => $password,
        ':phone' => $phone,
        ':email' => $email
    ]);
    $this->execute("
    UPDATE info 
    SET name = :name, birthday = :birthday, gender = :gender, address = :address
    WHERE idacc = :idacc;
", [
    ':idacc' => $id,
    ':name' => $name,
    ':birthday' => $birthday,
    ':gender' => $gender,
    ':address' => $address
]);
    }
    catch (Exception $e) {
        throw $e;
    }
    }
}   