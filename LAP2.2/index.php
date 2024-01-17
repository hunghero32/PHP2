<?php
require_once 'controller/tk.php';
if(isset($_GET['url'])){
    $url=$_GET['url'];
    switch ($url) {
        case 'addTk':
            if(isset($_POST['submit'])){
                addTk($_POST['userName'],$_POST['phoneNumber'],$_POST['password']);
            }
            add_tk_view();
            break;
        case 'deleteTk';
        deleteTk();
        break;
        case 'updateTk':
            updateTk();
        break;
        default:
            listTk();
            break;
    }
}else{
    listTk();
}
?>