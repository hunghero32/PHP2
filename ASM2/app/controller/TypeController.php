<?php

namespace App\controller;

use App\Model\TypeModel;

class TypeController extends TypeModel
{
    // Hiển thị CRUD ===> GET
    public function C()
    {
        require_once "app/view/admin/type/add.php";
    }
    public function R()
    {
        $type = parent::getAll();
        require_once "app/view/admin/type/list.php";
    }
    public function U($id)
    {
        if ($id !== "") {
            $type = $this->getById($id);
        }
        require_once "app/view/admin/type/update.php";
    }
    public function D($id)
    {
        if ($id !== null) {
            parent::delete($id);
        }
        echo '<script>
        window.location.href="http://localhost:10/PHP2/ASM2/type";
        </script>';
    }
    // Thực hiện Cre và Upd ===> POST 
    public function Cre()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $type = isset($_POST["type"]) ? $_POST["type"] : '';
            parent::insert($type);
        }
        echo '<script>
        window.location.href="http://localhost:10/PHP2/ASM2/type";
        </script>';
    }
    public function Upd($id)
    {
        $type = $this->getById($id);
        if ($type) {
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                $type = isset($_POST["type"]) ? $_POST["type"] : '';
                parent::update($id, $type);
            }
        }
        echo '<script>
        window.location.href="http://localhost:10/PHP2/ASM2/type";
        </script>';
    }
}
