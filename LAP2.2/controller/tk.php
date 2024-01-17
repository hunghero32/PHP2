<?php
require_once 'model/taiKhoan.php';
session_start();
function listTk(){
    $listTk=load_all_tk();
    include 'view/list.php';
}
function add_tk_view(){
    include 'view/add.php';
}
function addTk($userName,$phoneNumber,$password){
        $result=insert_tk($userName,$phoneNumber,$password);
        if(!$result){
            unset($_SESSION['message']);
            echo '<script>
                alert("Thêm Xong !");
                window.location.href="index.php?url=home";
            </script>';
        }

}
function deleteTk(){
    if(isset($_GET['id'])&&($_GET['id']!="")){
        $id=$_GET['id'];
        delete_tk($id);
        echo '<script>
                alert("Xóa Xong !");
                window.location.href="index.php?url=home";
            </script>';
    }
}
function updateTk(){
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $tk=load_one_tk($id);
        if(isset($_SESSION['message'])){
            unset($_SESSION['message']);
        }
    }
    if(isset($_POST['submit'])){
        $id=$_POST['id'];
        $userName=$_POST['userName'];
        $phoneNumber=$_POST['phoneNumber'];
        $password=$_POST['password'];
            $result=update_tk($id,$userName,$phoneNumber,$password);
            if(!$result){
                unset($_SESSION['message']);
                echo '<script>
                    alert("Ban da update thanh cong !");
                    window.location.href="index.php?url=home";
                </script>';
            }
    }
    include 'view/update.php';
}
?>