<?php
namespace App\model;
include 'env.php';
use PDO;
use PDOException;
class DB
{
    private $connect;
    public function getConnect()
    {
        try {
            $this->connect = new PDO("mysql:host=" . DBHOST . ";dbname=" . DBNAME . ";charset=" . DBCHARSET, DBUSER, DBPASS);
            $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->connect;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function execute($sql, $sql_args = array())
    {
        try {
            $conn = $this->getConnect();
            $stmt = $conn->prepare($sql);
            $stmt->execute($sql_args);
        } catch (PDOException $e) {
            throw $e;
        }
    }

    public function query($sql, $sql_args = array())
    {
        try {
            $conn = $this->getConnect();
            $stmt = $conn->prepare($sql);
            $stmt->execute($sql_args);
            $rows = $stmt->fetchAll();
            return $rows;
        } catch (PDOException $e) {
            throw $e;
        }
    }

    public function queryOne($sql, $sql_args = array())
    {
        try {
            $conn = $this->getConnect();
            $stmt = $conn->prepare($sql);
            $stmt->execute($sql_args);
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            return $row;
        } catch (PDOException $e) {
            throw $e;
        }
    }

    public function closeConnection()
    {
        unset($this->connect);
    }
}

?>
