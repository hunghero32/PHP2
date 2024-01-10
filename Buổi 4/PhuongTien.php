<?php 
    class PTGT{
        // Thuộc Tính
        public $tenPT;
        public $loaiPT;
        // Phương Thức
        public function hienthi(){
            echo "Hiển thị PTGT";
        }
        public function __construct($tenPT, $loaiPT){
            $this->tenPT = $tenPT;
            $this->loaiPT = $loaiPT;
        }
        public function doXe(){
            echo "Đỗ Xe";
        }
    }
    class XeMay extends PTGT{
        public $dongCo;
        public function __construct($tenPT, $loaiPT,$dongCo){
            parent::__construct($tenPT,$loaiPT);
            // $this->dongCo = $tenPT;
            // $this->loaiPT = $loaiPT;
            $this->dongCo = $dongCo;
        }
        public function chay(){
            echo "Xe Máy";
        }
        public function doXe(){
            parent::doXe();
            echo "Đỗ Xe Máy";
        }
    }
    // Khởi tạo từ tk con 
    $xeMay = new XeMay("Xe","2 Bánh","2 kỳ");
    $xeMay->chay();
    $xeMay->doXe();
    // $xeMay->hienthi();

    // Khởi tạo từ tk cha
    // $Oto = new PTGT();
    // $Oto->chay();
?>