<?php
require 'vendor/autoload.php';
require 'app/common/route.php';
// require_once 'controller/account.php';

// $url = !isset($_GET['url']) ? "/" : $_GET['url'];

// $userController = new UserController();

// switch ($url) {
//     case "list":
//         $userController->listAccounts();
//         break;
//         case "add":
//             $userController->createAccount($username, $password, $phone, $email, $name, $birthday, $gender, $address);
//             $username = isset($_POST["username"]) ? $_POST["username"] : '';
//             $password = isset($_POST["password"]) ? $_POST["password"] : '';
//             $phone = isset($_POST["phone"]) ? $_POST["phone"] : '';
//             $email = isset($_POST["email"]) ? $_POST["email"] : '';
//             $name = isset($_POST["name"]) ? $_POST["name"] : '';
//             $birthday = isset($_POST["birthday"]) ? $_POST["birthday"] : '';
//             $gender = isset($_POST["gender"]) ? $_POST["gender"] : '';
//             $address = isset($_POST["address"]) ? $_POST["address"] : '';
        
//             if ($_SERVER["REQUEST_METHOD"] === "POST") {
//                 $userController->createAccount($username, $password, $phone, $email, $name, $birthday, $gender, $address);
//             }
//             require_once "view/add.php";
            // break;
        

            // case "update":
            //     $id = isset($_GET["id"]) ? $_GET["id"] : "";
            //     if ($id !== "") {
            //         $account = $userController->getAccountById($id);
            
            //         if ($account) {
            //             $userController->updateAccount($id, $username, $password, $phone, $email, $name, $birthday, $gender, $address);
//                         $username = isset($_POST["username"]) ? $_POST["username"] : '';
//                         $password = isset($_POST["password"]) ? $_POST["password"] : '';
//                         $phone = isset($_POST["phone"]) ? $_POST["phone"] : '';
//                         $email = isset($_POST["email"]) ? $_POST["email"] : '';
//                         $name = isset($_POST["name"]) ? $_POST["name"] : '';
//                         $birthday = isset($_POST["birthday"]) ? $_POST["birthday"] : '';
//                         $gender = isset($_POST["gender"]) ? $_POST["gender"] : '';
//                         $address = isset($_POST["address"]) ? $_POST["address"] : '';
            
//                         if ($_SERVER["REQUEST_METHOD"] === "POST") {
//                             $userController->updateAccount($id, $username, $password, $phone, $email, $name, $birthday, $gender, $address);
//                         }
            
//                         require_once "view/update.php";
    //                 }
    //             } else {
    //                 echo "Invalid request. Please provide an account ID.";
    //             }
    //             break;

    // case "delete":
    //     $userController->deleteAccount($id);
//         $id = isset($_GET["id"]) ? $_GET["id"] : "";
//         if ($id !== null) {
//             $userController->deleteAccount($id);
//         } else {
//             echo "Invalid request. Please provide an account ID.";
//         }
//         break;

//     default:
//         $userController->listAccounts();

//         break;
// }
