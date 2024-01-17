<?php
require_once "env.php";

// Hàm kết nối
function getConnect(){
    $connect = new PDO("mysql:host=".HOST.";dbname=".DB_NAME.";charset=".DB_CHARSET, DB_USER, DB_PASSWORD);
    return $connect;
}

// Hàm lấy dữ liệu 
function getData($query, $getAll=true){
    $conn = getConnect();
    $stmt = $conn->prepare($query);
    $stmt->execute();
    if ($getAll){
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    else{
        return $stmt->fetch();
    }
}

// Hàm thêm dữ liệu
function insertData($table, $data){
    $conn = getConnect();

    $columns = implode(", ", array_keys($data));
    $values = ":" . implode(", :", array_keys($data));

    $query = "INSERT INTO $table ($columns) VALUES ($values)";
    $stmt = $conn->prepare($query);

    foreach ($data as $key => $value) {
        $stmt->bindValue(":$key", $value);
    }

    return $stmt->execute();
}

// Hàm cập nhật dữ liệu
function updateData($table, $data, $condition){
    $conn = getConnect();

    $setClause = '';
    foreach ($data as $key => $value) {
        $setClause .= "$key=:$key, ";
    }
    $setClause = rtrim($setClause, ', ');

    $query = "UPDATE $table SET $setClause WHERE $condition";
    $stmt = $conn->prepare($query);

    foreach ($data as $key => $value) {
        $stmt->bindValue(":$key", $value);
    }

    return $stmt->execute();
}

// Hàm xóa dữ liệu
function deleteData($table, $condition){
    $conn = getConnect();

    $query = "DELETE FROM $table WHERE $condition";
    $stmt = $conn->prepare($query);

    return $stmt->execute();
}

?>
