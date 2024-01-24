<?php

namespace App\controller;

use App\model\UserManager;

class UserController extends UserManager
{
public function listAcc() {
    $accounts = parent::getAllAccounts();
    require_once "app/view/list.php";
}

public function viewAcc($id) {
    $account = $this->getAccountById($id);
    var_dump($account);
}

public function createAcc() {
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $username = isset($_POST["username"]) ? $_POST["username"] : '';
        $password = isset($_POST["password"]) ? $_POST["password"] : '';
        $phone = isset($_POST["phone"]) ? $_POST["phone"] : '';
        $email = isset($_POST["email"]) ? $_POST["email"] : '';
        $name = isset($_POST["name"]) ? $_POST["name"] : '';
        $birthday = isset($_POST["birthday"]) ? $_POST["birthday"] : '';
        $gender = isset($_POST["gender"]) ? $_POST["gender"] : '';
        $address = isset($_POST["address"]) ? $_POST["address"] : '';
        
        parent::insertAccount($username, $password, $phone, $email, $name, $birthday, $gender, $address);

        echo '<script>
            alert("Tạo Xong");
            window.location.href="/PHP2/ASM1/";
            </script>';
    } else {
        // Handle non-POST requests or show an error message
        echo "Invalid request method.";
    }
}


public function updateAcc($id) {
    $account = $this->getAccountById($id);
    if ($account) {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $username = isset($_POST["username"]) ? $_POST["username"] : '';
            $password = isset($_POST["password"]) ? $_POST["password"] : '';
            $phone = isset($_POST["phone"]) ? $_POST["phone"] : '';
            $email = isset($_POST["email"]) ? $_POST["email"] : '';
            $name = isset($_POST["name"]) ? $_POST["name"] : '';
            $birthday = isset($_POST["birthday"]) ? $_POST["birthday"] : '';
            $gender = isset($_POST["gender"]) ? $_POST["gender"] : '';
            $address = isset($_POST["address"]) ? $_POST["address"] : '';

            parent::updateAccount($id, $username, $password, $phone, $email, $name, $birthday, $gender, $address);

            echo '<script>
                alert("Cập nhật ' . $id . '");
                window.location.href="/PHP2/ASM1/";
            </script>';
        }
    } else {
        echo "Account not found.";
    } 
}


public function deleteAcc($id) {
    // $id = isset($_GET["id"]) ? $_GET["id"] : ""; // Commented out
    if ($id !== null) {
        parent::deleteAccount($id);
    } else {
        echo "Invalid request. Please provide an account ID.";
    }
    echo '<script>
            window.location.href="/PHP2/ASM1/";
        </script>';
}

public function view(){
    require_once "app/view/list.php";
}
public function create(){
    require_once "app/view/add.php";
}
public function update($id){
    if ($id !== "") {
    $account = $this->getAccountById($id);
    }
    require_once "app/view/update.php";
}
}
?>