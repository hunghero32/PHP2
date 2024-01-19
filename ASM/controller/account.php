<?php
require_once 'model/account.php';

class UserController {
    private $userManager;

    public function __construct() {
        $this->userManager = new UserManager();
    }

    public function listAccounts() {
        $accounts = $this->userManager->getAllAccounts();
        var_dump($accounts);
    }

    public function viewAccount($id) {
        $account = $this->userManager->getAccountById($id);
        var_dump($account);
    }

    public function createAccount($username, $password, $phone, $email) {
        $this->userManager->insertAccount($username, $password, $phone, $email);
        echo "Account created successfully.";
    }

    public function updateAccount($id, $username, $password, $phone, $email) {
        $this->userManager->updateAccount($id, $username, $password, $phone, $email);
        echo "Account updated successfully.";
    }

    public function deleteAccount($id) {
        $this->userManager->deleteAccount($id);
        echo "Account deleted successfully.";
    }
}
?>
