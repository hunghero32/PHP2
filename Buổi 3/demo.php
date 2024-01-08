<?php
class SinhVien
{
    private $hoTen;
    protected $tuoi;
    public $diaChi;
    public $email;
    const MSG_CONTENT = "PHP2";
    // Set giá trị
    function sethoTen($values)
    {
        $this->hoTen = $values;
    }
    function settuoi($values)
    {
        $this->tuoi = $values;
    }
    function setdiaChi($values)
    {
        $this->diaChi = $values;
    }
    function setemail($values)
    {
        $this->email = $values;
    }
    // Get giá trị
    function gethoTen()
    {
        return $this->hoTen;
    }
    function gettuoi()
    {
        return $this->tuoi;
    }
    function getdiaChi()
    {
        return $this->diaChi;
    }
    function getemail()
    {
        return $this->email;
    }
    // in thông tin 
    function print()
    {
echo $this->gethoTen();
echo "<br>";
echo $this->gettuoi();
echo "<br>";
echo $this->getdiaChi();
echo "<br>";
echo $this->getemail();
    }
        // Hàm khởi tạo cần gì thì tạo cái đấy 
        function __construct($a,$b,$c,$d){
            $this->hoTen=$a;
            $this->tuoi=$b;
            $this->diaChi=$c;
            $this->email=$d;

        }
        private function inThongTin(){
            echo $this->gethoTen(). "_" . $this->gettuoi();
        }
        public function getInfo(){
            return $this->inThongTin();
        }
}
// $obj1 = new SinhVien ;
// $obj1->sethoTen("Hưng");
// $obj1->settuoi(19);
// $obj1->setdiaChi("88 Vĩnh Phúc");
// $obj1->setemail("hung@gmail.com");
// echo $obj1->gethoTen();
// echo "<br>";
// echo $obj1->gettuoi();
// echo "<br>";
// echo $obj1->getdiaChi();
// echo "<br>";
// echo $obj1->getemail();


// $obj1 = new SinhVien ("Hưng",19,"88 Vĩnh Phúc","hung@gmail.com");
// echo $obj1->gethoTen();
// echo "<br>";
// echo $obj1->gettuoi();
// echo "<br>";
// echo $obj1->getdiaChi();
// echo "<br>";
// echo $obj1->getemail();
// echo "<br>";
// echo "về dcm";
// echo $obj1->print() ;

