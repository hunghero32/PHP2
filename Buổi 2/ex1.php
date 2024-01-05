<?php 
// Xây dựng class tinhToan, gồm thuộc tính NumberA, NumberB
// Các Phương thức tổng hiệu tích thương

// Lớp 
class tinhToan{
    public $numberA=5;
    public $numberB=7;
    // ngang với var $numberA,$numberB;
    
    const MSG_CONTENT = "PHP2";
    // Phương thức 
    function tinhTong ($a,$b){
        return $a+$b;
    }
    function tinhHieu ($a,$b){
        return $a-$b;
    }
    function tinhTich ($a,$b){
        return $a*$b;
    }
    function tinhThuong ($a,$b){
        return $a%$b;
    }
    // Set giá trị
    function setNumberA ($values){
        $this->numberA=$values;
    }
    function setNumberB ($values){
        $this->numberB=$values;
    }
    //Lấy giá trị 
    function getNumberA (){
        return $this->numberA;
        }
    function getNumberB (){
        return $this->numberB;
        }
    // Hàm khởi tạo cần gì thì tạo cái đấy 
    function __construct($a,$b){
        $this->numberA=$a;
        $this->numberB=$b;
    }
    // in thông tin 
    function print(){
        echo "Thông tin số a".$this->numberA."Thông tin số b".$this->numberB ;
    }
}
// Khởi tạo đối tượng 
// $obj1 = new tinhToan();
$obj1 = new tinhToan(6,7);

// Lấy giá trị 
echo "<br>";
echo $obj1->numberA;
echo $obj1->numberB;

// gán giá trị mới cho numberA,B
// $obj1->numberA =10;
// $obj1->numberB = 30;
$obj1 ->setNumberA(10);
echo $obj1->getNumberA();
echo "<br>";

// Gọi hàm
$obj1->tinhTong($obj1->numberA,$obj1->numberB);
?>