<?php
require_once 'db.php';

function load_all_tk(){
    $sql="SELECT * FROM user";
    return getData($sql);
}
function load_one_tk($id){
    $sql="SELECT * FROM user WHERE id='$id'";
    return getData($sql,false);
}
function insert_tk($userName,$phoneNumber,$password){
    $sql="INSERT INTO `user`(`userName`, `phoneNumber`, `password`) VALUES ('$userName','$phoneNumber','$password')";
    return getData($sql);
}
function delete_tk($id){
    $sql="DELETE FROM user WHERE id='$id'";
    return getData($sql,false);
}
function update_tk($id,$userName,$phoneNumber,$password){
    $sql="UPDATE `user` SET `userName`='$userName',`phoneNumber`='$phoneNumber',`password`='$password' WHERE `id`='$id'";
    return getData($sql,false);
}
?>