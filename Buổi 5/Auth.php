<?php 
class Auth implements AuthInterface {
    public function login(){
        echo "đăng nhập";
    }
    public function logout(){
        echo "đăng xuất";
    }
}
?>