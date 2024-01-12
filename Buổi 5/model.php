<?php 
abstract class Model{
    // Thuộc tính
    public $name;
    // Phương thức
    public function getData(){
        echo "đây là Get Data";
    }
    abstract public function add();
    abstract public function update();
    abstract public function delete();

}
?>