<?php 
        function getConnect(){
            $pdo = new PDO("mysql:host=".DBHOST.";dbname=".DBNAME.
            ";charset=".DBCHARSET,DBUSER,DBPASS);
            return $pdo;
        }

        // Hàm lấy nhiều dòng dữ liệu
        function getAllData($query){   
            // $pdo = getConnect();         
            try {
                $pdo = getConnect();
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
        function getRowData($query){
            try {
                $pdo = getConnect();
                $stmt = $pdo->prepare($query);
                $stmt->execute();
                return $stmt->fetch();
            } catch(PDOException $e) {
                echo "Lỗi truy vấn: " . $e->getMessage();
                return null;
            }
        }
    
?>