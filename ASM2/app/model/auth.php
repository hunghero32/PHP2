<?php

namespace App\model;

use App\model\DB;
use Exception;

class Auth extends DB
{
    public function SignIn($username, $password,$role){
        $sql = "SELECT * FROM account WHERE username = ? AND password = ?";
        $row = $this->queryOne($sql, array($username, $password,$role));
        if ($row) {
            if($role===0){
                $_SESSION['admin']=$row;
            }else{
                $_SESSION['user']=$row;
            }
            return true;
        } else {
            // Đăng nhập thất bại
            return false;
        }
    }
    public function SignUp($username, $password, $email,$role){
        $this->execute("
            INSERT INTO table (`username`, `password`, `email`, `role`) 
            VALUES (:username, :password, :email,:role);
        ", [
            ':username' => $username,
            ':password' => $password,
            ':email' => $email,
            ':role'=>$role
        ]);
    }
    public function Forgot($email){
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
}