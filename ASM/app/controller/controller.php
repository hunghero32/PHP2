<?php

namespace App\controller;

use App\model\Model;

require "model/model.php";
class Controller extends Model
{
    // Hiển thị CRUD ===> GET
    public function C()
    {
        require_once "app/view/add.php";
    }
    public function R()
    {
        $demo = parent::getAll();
        require_once "app/view/list.php";
    }
    public function U($id)
    {
        if ($id !== "") {
            $demo = $this->getById($id);
        }
        require_once "app/view/update.php";
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
            $test = isset($_POST["test"]) ? $_POST["test"] : '';
            $test2 = isset($_POST["test2"]) ? $_POST["test2"] : '';
            $test3 = isset($_POST["test3"]) ? $_POST["test3"] : '';
            parent::insert($test, $test2, $test3);
        }
    }
    public function Upd($id)
    {
        $demo = $this->getById($id);
        if ($demo) {
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                $test = isset($_POST["test"]) ? $_POST["test"] : '';
                $test2 = isset($_POST["test2"]) ? $_POST["test2"] : '';
                $test3 = isset($_POST["test3"]) ? $_POST["test3"] : '';
                parent::update($id, $test, $test2, $test3);
            }
        }
    }
}
