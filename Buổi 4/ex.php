<?php
class ConNguoi
{
    public $hoTen;
    public $namSinh;
    public $diaChi;
    public $sdt;

    public function __construct($hoTen, $namSinh, $diaChi, $sdt)
    {
        $this->hoTen = $hoTen;
        $this->namSinh = $namSinh;
        $this->diaChi = $diaChi;
        $this->sdt = $sdt;
    }
    // Get giá trị
    function gethoTen()
    {
        return $this->hoTen;
    }
    function getnamSinh()
    {
        return $this->namSinh;
    }
    function getdiaChi()
    {
        return $this->diaChi;
    }
    function getsdt()
    {
        return $this->sdt;
    }

    // Set giá trị
    function sethoTen($values)
    {
        $this->hoTen = $values;
    }
    function setnamSinh($values)
    {
        $this->namSinh = $values;
    }
    function setdiaChi($values)
    {
        $this->diaChi = $values;
    }
    function setdt($values)
    {
        $this->sdt = $values;
    }
    
    // Tính Tuổi
    public function Tuoi()
    {
        return date("Y") - $this->namSinh;
    }
    // Hien Thi
    public function print()
    {
        echo "Họ tên: $this->hoTen<br>";
        echo "Địa chỉ: $this->diaChi<br>";
        echo "Số điện thoại: $this->sdt<br>";
    }
}
class GiangVien extends ConNguoi {
    public $soGioGiang;
    public $luong;
    public function __construct($hoTen, $namSinh, $diaChi, $sdt,$soGioGiang,$luong){
        parent::__construct($hoTen, $namSinh, $diaChi, $sdt);
        $this->soGioGiang = $soGioGiang;
        $this->luong = $luong;
    }

    public function print(){
        parent::print();
        echo "Số Giờ Giảng: $this->soGioGiang<br>";
        echo "Lương/Giờ: $this->luong<br>";
    }
    public function TienLuong(){
        return $this->soGioGiang * $this->luong;
    }
}
$info = new GiangVien ("Hưng","2004","88 Vĩnh Phúc","0375343852","200","200000");
$info->print();
$info->Tuoi();
echo "Tiền lương: " . $info->TienLuong();

