<?php 
    require_once "admin/TaiKhoan.php";
    require_once "user/TaiKhoan.php";

    // Cách 1
    $objAmdin = new admin\TaiKhoan();
    echo "<br>";
    $objUser = new user\TaiKhoan();
    echo "<br>";

    // Cách 2 
    use admin\TaiKhoan as admintk;
    $obj = new admintk();
    echo "<br>";
    use user\TaiKhoan as usertk;
    $obj = new usertk();

?>