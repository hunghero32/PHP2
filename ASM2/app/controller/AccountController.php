<?php

namespace App\controller;

use App\model\AccountModel;
use App\model\ProductModel;
use App\model\TypeModel;


class AccountController extends AccountModel
{
    // Hiển thị CRUD ===> GET
    public function C()
    {
        require_once "app/view/admin/account/add.php";
    }
    public function R()
    {
        $account = parent::getAll();
        require_once "app/view/admin/account/list.php";
    }
    public function U($id)
    {
        if ($id !== "") {
            $account =parent::getById($id);
        }
        require_once "app/view/admin/account/update.php";
    }
    public function D($id)
    {
        if ($id !== null) {
            parent::delete($id);
        }
    }
    // Thực hiện Cre và Upd ===> POST 
    public function Cre()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $username = isset($_POST["username"]) ? $_POST["username"] : '';
            $password = isset($_POST["password"]) ? $_POST["password"] : '';
            $email = isset($_POST["email"]) ? $_POST["email"] : '';
            $role = isset($_POST["role"]) ? $_POST["role"] : '';
            parent::insert($username, $password, $email, $role);
        }
        echo '<script>
        alert("Tạo Thành công");
        window.location.href="http://localhost:10/PHP2/ASM2/account";
        </script>';
    }
    public function Upd($id)
    {
        $account = $this->getById($id);
        if ($account) {
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                $username = isset($_POST["username"]) ? $_POST["username"] : '';
                $password = isset($_POST["password"]) ? $_POST["password"] : '';
                $email = isset($_POST["email"]) ? $_POST["email"] : '';
                parent::update($id, $username, $password, $email);
            }
        }
        echo '<script>
        alert("Update Thành công");
        window.location.href="http://localhost:10/PHP2/ASM2/account";
        </script>';
    }
    public function SignIn()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $username = isset($_POST["username"]) ? $_POST["username"] : '';
            $password = isset($_POST["password"]) ? $_POST["password"] : '';
    
            // Perform validation and authentication
            $loggedIn = parent::authenticateUser($username, $password);
    
            if ($loggedIn) {
                // Redirect or perform actions after successful login
                echo '<script>
                alert("Đăng nhập thành công");
                window.location.href="/PHP2/ASM2/Alist";
                </script>';
            } else {
                // Handle authentication failure, show error message, etc.
                echo '<script>
                alert("Đăng nhập Thất Bại");
                window.location.href="/PHP2/ASM2/Alist";
                </script>';
            }
        } else {
            // Display the login form
            require_once "app/view/admin/account/signin.php";
        }
    }

    public function Forgot($email)
    {
        $sql = "SELECT * FROM users WHERE email = ?";
        $row = $this->queryOne($sql, array($email));

        if ($row) {
            // Đăng nhập thành công, thực hiện các hành động cần thiết
            return true;
        } else {
            // Đăng nhập thất bại
            return false;
        }
    }
    //==== Check
    public function check()
    {   
        require_once "app/view/admin/check.php";
    }
    public function admin()
    {   
        require_once "app/view/admin/admin.php";
    }
    public function product()
    {   
        $product =(new ProductModel)->getAll();
        require_once "app/view/admin/product/product.php";
    }
    public function type()
    {   
        $type =(new TypeModel)->getAll();
        require_once "app/view/admin/type/type.php";
    }
    public function account()
    {   
        $account = parent::getAll();
        require_once "app/view/admin/account/account.php";
    }
}
