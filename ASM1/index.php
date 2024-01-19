<?php
require_once 'controller/account.php';

$userController = new UserController();

if (isset($_GET['url'])) {
    $url = $_GET['url'];
    
    switch ($url) {
        case 'add':
            if (isset($_POST['submit'])) {
                $userController->createAccount($_POST['hoTen'], $_POST['tuoi'], $_POST['diaChi'], $_POST['sdt']);
            }
            require_once "view/add.php";
            break;
            
        case 'delete':
            if (isset($_GET['maNV'])) {
                $userController->deleteAccount($_GET['maNV']);
            }
            break;
            
        case 'update':
            // if(isset($_GET['maNV'])){
            //     $maNV=$_GET['maNV'];
            //     $accounts=queryOne($maNV);
            //     if(isset($_SESSION['message'])){
            //         unset($_SESSION['message']);
            //     }
            // }
            // if(isset($_POST['submit'])){
            //     $maNV=$_POST['maNV'];
            //     $userName=$_POST['userName'];
            //     $phoneNumber=$_POST['phoneNumber'];
            //     $password=$_POST['password'];
            //         $result=update_tk($maNV,$userName,$phoneNumber,$password);
            //         if(!$result){
            //             unset($_SESSION['message']);
            //             echo '<script>
            //                 alert("Ban da update thanh cong !");
            //                 window.location.href="index.php?url=home";
            //             </script>';
            //         }
            // }
            include 'view/update.php';
        default:
            $userController->listAccounts(); 
            break;
    }
} else {
    $userController->listAccounts(); 
}
?>
