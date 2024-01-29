<?php
namespace App\controller;
use App\model\PetModel;
use eftec\bladeone\BladeOne;
class PetController extends PetModel
{
    public $view;
    function __construct(){
        $view = "app/view";
        $cache = "app/cache";
        $this->view = new BladeOne($view, $cache,BladeOne::MODE_AUTO);
    }
//=============================== Hiển Thị =================================
    public function view(){
        $pet = parent::getAllPets();
        // require_once "app/view/list.php";
        return $this->view->run('pet.list',['pet'=>$pet]);
    }
    public function create(){
        // require_once "app/view/add.php";
        return $this->view->run('pet.add');
    }
    public function update($id){
        // if ($id !== "") {
        $pet = $this->getPetById($id);
        // }
        // require_once "app/view/update.php";
        return $this->view->run('pet.update',['pet'=>$pet]);
    }
//================================ Chạy Chức năng ===========================
public function list() {
    $pet = parent::getAllPets();
    require_once "app/view/list.php";
}
public function createPet() {
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $loai = isset($_POST["loai"]) ? $_POST["loai"] : '';
        $mota = isset($_POST["mota"]) ? $_POST["mota"] : '';
        $soluong = isset($_POST["soluong"]) ? $_POST["soluong"] : '';
        $gia = isset($_POST["gia"]) ? $_POST["gia"] : '';
        parent::insertPet($loai, $mota, $soluong, $gia);

        echo '<script>
            alert("Tạo Xong");
            window.location.href="/PHP2/TEST-BLADE/";
            </script>';
    }
}


public function updatePet($id) {
    $pet = $this->getPetById($id);
    if ($pet) {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $loai = isset($_POST["loai"]) ? $_POST["loai"] : '';
            $mota = isset($_POST["mota"]) ? $_POST["mota"] : '';
            $soluong = isset($_POST["soluong"]) ? $_POST["soluong"] : '';
            $gia = isset($_POST["gia"]) ? $_POST["gia"] : '';
            parent::updatePets($id,$loai, $mota, $soluong, $gia);

            echo '<script>
                alert("Cập nhật ' . $id . '");
                window.location.href="/PHP2/TEST-BLADE/";
            </script>';
        }
    } else {
        echo "Account not found.";
    } 
}
public function deletePet($id) {
    if ($id !== null) {
        parent::deletePet($id);
    } else {
        echo "Invalid request. Please provide an account ID.";
    }
    echo '<script>
        alert("xóa ID ' . $id . '");
            window.location.href="/PHP2/TEST-BLADE/";
        </script>';
}
}