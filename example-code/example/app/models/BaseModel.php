<?php 
    namespace App\models;
    use PDO;
    class BaseModel{
        public function getConnect(){
            $pdo = new PDO("mysql:host=".DBHOST.";dbname=".DBNAME.
            ";charset=".DBCHARSET,DBUSER,DBPASS);
            return $pdo;
        }

        // Hàm lấy nhiều dòng dữ liệu
        public function getAllData($query){   
            // $pdo = getConnect();         
            try {
                $pdo = $this->getConnect();
                if($pdo !== null) {
                $stmt = $pdo->prepare($query);               
                $stmt->execute();
                return $stmt->fetchAll();
                } else {
                    return null; 
                }
            } catch(PDOException $e) {
                echo "Lỗi truy vấn: " . $e->getMessage();
                return null;
            }
        }

        // Hàm lấy một dòng dữ liệu
        public function getRowData($query){
            try {
                $pdo = $this->getConnect();
                $stmt = $pdo->prepare($query);
                $stmt->execute();
                return $stmt->fetch();
            } catch(PDOException $e) {
                echo "Lỗi truy vấn: " . $e->getMessage();
                return null;
            }
        }
    }
        
    
?>