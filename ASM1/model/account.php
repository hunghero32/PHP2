<?php
require_once 'db.php';

class NhanVien extends DB{
    public function getAll_NV() {
        $sql = "SELECT * FROM nhanvien";
        return $this->query($sql);
    }
    public function get_NV_maNV($maNV) {
        $sql = "SELECT * FROM account WHERE maNV = :maNV";
        return $this->queryOne($sql, [':maNV' => $maNV]);
    }
    public function insert_NV($hoTen, $tuoi, $diaChi, $sdt) {
        $sql = "INSERT INTO `nhanvien` (`hoTen`, `tuoi`, `diaChi`, `sdt`) VALUES (:hoTen, :tuoi, :diaChi, :sdt)";
        $this->execute($sql, [':hoTen' => $hoTen, ':tuoi' => $tuoi, ':diaChi' => $diaChi, ':sdt' => $sdt]);
    }

    public function delete_NV($maNV) {
        $sql = "DELETE FROM nhanvien WHERE maNV = :maNV";
        $this->execute($sql, [':maNV' => $maNV]);
    }

    public function update_NV($maNV, $hoTen, $tuoi, $diaChi, $sdt) {
        $sql = "UPDATE `nhanvien` SET `hoTen` = :hoTen, `tuoi` = :tuoi, `diaChi` = :diaChi, `sdt` = :sdt WHERE `maNV` = :maNV";
        $this->execute($sql, [':maNV' => $maNV, ':hoTen' => $hoTen, ':tuoi' => $tuoi, ':diaChi' => $diaChi, ':sdt' => $sdt]);
    }
}
?>
