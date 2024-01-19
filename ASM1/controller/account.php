<?php
require_once 'model/account.php';

class UserController extends NhanVien{

    public function listAccounts() {
        $accounts = $this->getAll_NV();
        // var_dump($accounts);
        require_once "view/list.php";
    }
    public function createAccount($hoTen, $tuoi, $diaChi, $sdt) {
        $this->insert_NV($hoTen, $tuoi, $diaChi, $sdt);

    }
    public function updateAccount($maNV, $hoTen, $tuoi, $diaChi, $sdt) {
        $this->update_NV($maNV, $hoTen, $tuoi, $diaChi, $sdt);
    }
    public function deleteAccount($maNV) {
        $this->delete_NV($maNV);
        
    }
    function deleteTk(){
        if(isset($_GET['maNV'])&&($_GET['maNV']!="")){
            $maNV=$_GET['maNV'];
            $this->delete_NV($maNV);
            echo '<script>
                    alert("Xóa Xong !");
                    window.location.href="index.php?url=home";
                </script>';
        }
    }
}
?>
