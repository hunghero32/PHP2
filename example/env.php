<?php 
// Cấu hình file kết nối csdl
    const DBNAME = "example";
    const DBUSER = "root";
    const DBPASS = "";
    const DBHOST = "127.0.0.1";
    const DBCHARSET = "utf8";

    const BASE_URL = "http://localhost/PHP2/WD18309/example/";

    function route($url) {
        return BASE_URL.$url;
    }

    function redirect($key, $msg, $url){
        $_SESSION[$key] = $msg;
        switch($key){
            case 'errors':
                unset($_SESSION['success']);
                break;
            case 'success':
                unset($_SESSION['errors']);
                break;
        }
        header('location: '.BASE_URL.$url."?msg=".$key);die;
    }
?>