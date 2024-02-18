<?php 
    include_once "app/models/BaseModel.php";

    function getAllSach(){
        $sql = "select * from sach";
        return getAllData($sql);
    }
?>