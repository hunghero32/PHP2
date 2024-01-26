<?php
namespace App\controller;
use App\model\PetModel;
class PetController extends PetModel
{

//=============================== Hiển Thị =================================
    public function view(){
        $pet = parent::getAllPets();
        require_once "app/view/list.php";
    }
    public function create(){
        require_once "app/view/add.php";
    }
    public function update($id){
        if ($id !== "") {
        $pet = $this->getPetById($id);
        }
        require_once "app/view/update.php";
    }
//================================ Chạy Chức năng ============================
public function list() {
    $pet = parent::getAllPets();
    require_once "app/view/list.php";
}

// public function viewPet($id) {
//     $pet = $this->getPetById($id);
//     var_dump($pet);
// }

public function createPet() {
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $loai = isset($_POST["loai"]) ? $_POST["loai"] : '';
        $mota = isset($_POST["mota"]) ? $_POST["mota"] : '';
        $soluong = isset($_POST["soluong"]) ? $_POST["soluong"] : '';
        $gia = isset($_POST["gia"]) ? $_POST["gia"] : '';
        parent::insertPet($loai, $mota, $soluong, $gia);

        echo '<script>
            alert("Tạo Xong");
            window.location.href="/PHP2/LAB3/";
            </script>';
    } else {
        // Handle non-POST requests or show an error message
        echo "Invalid request method.";
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
                window.location.href="/PHP2/LAB3/";
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
            window.location.href="/PHP2/LAB3/";
        </script>';
}
}