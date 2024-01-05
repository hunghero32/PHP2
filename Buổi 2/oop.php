<?php 
class Sum{
public $a=8;
public $b= 10;

function Tong($a,$b){
return $a+$b;
}
}
$obj = new Sum();
echo $obj->a;
echo "<br>";
echo $obj->Tong(5,9);
?>