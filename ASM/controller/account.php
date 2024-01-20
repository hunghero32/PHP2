<?php
require_once 'model/account.php';

class UserController extends UserManager {
    public function listAccounts() {
        $accounts = parent::getAllAccounts();
        require_once "view/list.php";
    }

    public function viewAccount($id) {
        $account = $this->getAccountById($id);
        var_dump($account);
    }

    public function createAccount($username, $password, $phone, $email, $name, $birthday, $gender, $address) {
        parent::insertAccount($username, $password, $phone, $email, $name, $birthday, $gender, $address);
        echo '<script>
            alert("Tạo Xong");
            window.location.href="index.php?url=list";
            </script>';
    }

    public function updateAccount($id, $username, $password, $phone, $email, $name, $birthday, $gender, $address) {
        parent::updateAccount($id, $username, $password, $phone, $email, $name, $birthday, $gender, $address);
        echo '<script>
            alert("Cập nhật ' . $id . '");
            window.location.href="index.php?url=list";
            </script>';
    }

    public function deleteAccount($id) {
        parent::deleteAccount($id);
        echo '<script>
                window.location.href="index.php?url=list";
            </script>';
    }
}
?>
