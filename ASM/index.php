<?php
require_once 'controller/account.php'; // Change to the correct path and filename for UserController

$userController = new UserController();

if (isset($_GET['url'])) {
    $url = $_GET['url'];
    
    switch ($url) {
        case 'addTk':
            if (isset($_POST['submit'])) {
                $userController->createAccount($_POST['userName'], $_POST['password'], $_POST['phoneNumber'], $_POST['email']);
            }
            // Assuming add_tk_view() is a function for displaying the add account form
            // Make sure to customize it according to your application's needs
            add_tk_view();
            break;
            
        case 'deleteTk':
            if (isset($_GET['id'])) {
                $userController->deleteAccount($_GET['id']);
            }
            break;
            
        case 'updateTk':
            if (isset($_GET['id'])) {
                // Assuming update_tk_view() is a function for displaying the update account form
                // Make sure to customize it according to your application's needs
                updateAccount($_GET['id']);
            } else {
                // Handle the case where no ID is provided for updating
                echo "Invalid request for updating account.";
            }
            break;
            
        default:
            $userController->listAccounts(); // Assuming list_tk() is a function for displaying the list of accounts
            break;
    }
} else {
    $userController->listAccounts(); // Assuming list_tk() is a function for displaying the list of accounts
}
?>
