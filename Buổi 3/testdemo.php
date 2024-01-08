<?php 
require_once "demo.php";

$obj1 = new SinhVien ("Hưng",19,"88 Vĩnh Phúc","hung@gmail.com");
echo $obj1->gethoTen();
echo "<br>";
echo $obj1->gettuoi();
echo "<br>";
echo $obj1->getInfo();
// echo $obj1->getdiaChi();
// echo "<br>";
// echo $obj1->getemail();
// echo "<br>";
// echo "về dcm";
// echo $obj1->print() ;
?>