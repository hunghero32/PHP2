<?php
include 'env.php';
    function getConnect(){
        $connect=new PDO("mysql:host=".DBHOST.";dbname=".DBNAME.";charset=".DBCHARSET,DBUSER,DBPASS);
        return $connect;
    }
    function getData($sql,$getAll=true){
        $conn=getConnect();
        $stmt=$conn->prepare($sql);
        $stmt->execute();
        if($getAll){
            return $stmt->fetchAll();
        }
        return $stmt->fetch();
    }
?>