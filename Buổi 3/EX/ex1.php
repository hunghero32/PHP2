<?php 
class Crush
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

    public function getTuoi()
    {
        return date("Y") - $this->namSinh;
    }


    public function getCheck()
    {
        $tuoi = $this->getTuoi();
        return $tuoi >= 18 ? "Đủ tuổi lấy chồng" : "Chưa đủ tuổi lấy chồng";
    }


    public function print()
    {
        echo "Họ tên: $this->hoTen<br>";
        echo "Địa chỉ: $this->diaChi<br>";
        echo "Số điện thoại: $this->sdt<br>";
    }
}

$obj1 = new Crush("Hưng", 2004, "88 Vĩnh Phúc", "0375343852");
echo $obj1->print();
echo "Tình trạng: ". $obj1->getCheck();
echo "<br>";
echo "Tuổi: ".$obj1-> getTuoi()

?>
