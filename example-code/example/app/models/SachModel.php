<?php 
    ///include_once "app/models/BaseModel.php";
    namespace App\models;
    use App\models\BaseModel;
    class SachModel extends BaseModel{

        public function getAllSach(){
            $sql = "select * from sach";
            return $this->getAllData($sql);
        }

        public function add($tenSach, $tacGia, $soLuong, $gia){
            $sql = "insert into sach(tenSach, tacGia, soLuong, gia) values ('$tenSach', '$tacGia', '$soLuong', '$gia')";
            return $this->getRowData($sql);
        }

        public function getById($idSach){
            $sql = "select * from sach where idSach = $idSach";
            return $this->getRowData($sql);
        }

        public function update($idSach, $tenSach, $tacGia, $soLuong, $gia){
            $sql = "update sach set tenSach = '$tenSach', tacGia = '$tacGia', soLuong= '$soLuong', gia = '$gia' where idSach = '$idSach'";
            return $this->getRowData($sql);
        }

        public function delSach($idSach){
            $sql = "delete from sach where idSach = '$idSach'";
            return $this->getRowData($sql);
        }
    }
  
?>