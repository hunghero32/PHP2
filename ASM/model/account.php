<?php
require_once 'db.php';

class UserManager {
    private $db;

    public function __construct() {
        $this->db = new DB();
    }

    public function getAllAccounts() {
        $sql = "SELECT * FROM account";
        return $this->db->query($sql);
    }

    public function getAccountById($id) {
        $sql = "SELECT * FROM account WHERE id = :id";
        return $this->db->queryOne($sql, [':id' => $id]);
    }

    public function insertAccount($username, $password, $phone, $email) {
        $sql = "INSERT INTO `account` (`username`, `password`, `phone`, `email`) VALUES (:username, :password, :phone, :email)";
        $this->db->execute($sql, [':username' => $username, ':password' => $password, ':phone' => $phone, ':email' => $email]);
    }

    public function deleteAccount($id) {
        $sql = "DELETE FROM account WHERE id = :id";
        $this->db->execute($sql, [':id' => $id]);
    }

    public function updateAccount($id, $username, $password, $phone, $email) {
        $sql = "UPDATE `account` SET `username` = :username, `password` = :password, `phone` = :phone, `email` = :email WHERE `id` = :id";
        $this->db->execute($sql, [':id' => $id, ':username' => $username, ':password' => $password, ':phone' => $phone, ':email' => $email]);
    }
}
?>
