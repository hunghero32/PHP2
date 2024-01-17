<?php
require_once "models/laptop.php";

// Hiển thị danh sách laptop
function listLaptop(){
    $laptops = getLaptop();
    require_once "views/listLaptop.php";
}

// Thêm laptop mới
function addLap($data){
    // Kiểm tra dữ liệu đầu vào nếu cần
    addLap($data);
    header("Location: index.php?action=addLaptop");
}

// Cập nhật laptop
function updateLap($data, $id){
    // Kiểm tra dữ liệu đầu vào nếu cần
    updateLap($data, "id = $id");
    header("Location: index.php?action=update&id=. $id .");
}

// Xóa laptop
function deleteLap($id){
    // Kiểm tra dữ liệu đầu vào nếu cần
    deleteLap("id = $id");
    header("Location: index.php?action=listLaptop");
}

// Kiểm tra hành động từ URL và gọi hàm tương ứng
$action = isset($_GET['action']) ? $_GET['action'] : '';

switch ($action) {
    case 'add':
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                "name" => $_POST['name'],
                "memory" => $_POST['memory'],
                "disk" => $_POST['disk'],
                "graphics" => $_POST['graphics'],
                "price" => $_POST['price'],
            ];
            addLap($data);
        }
        break;

        case 'update':
            if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['id'])) {
                $id = $_POST['id'];
                $data = [
                    "name" => $_POST['name'],
                    "memory" => $_POST['memory'],
                    "disk" => $_POST['disk'],
                    "graphics" => $_POST['graphics'],
                    "price" => $_POST['price'],
                ];
                updateLaptop($data, $id);
            }
            break;


    case 'delete':
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            deleteLaptop($id);
        }
        break;

    default:
        listLaptop();
        break;
}
?>
