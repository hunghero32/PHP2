<?php

namespace App\controller;

use App\model\CouponModel;
use eftec\bladeone\BladeOne;
class CouponController extends CouponModel
{
    public $view;
    function __construct(){
        $view = "app/view";
        $cache = "app/cache";
        $this->view = new BladeOne($view, $cache,BladeOne::MODE_AUTO);
    }

    // Hiển thị CRUD ===> GET
    public function C()
    {
        return $this->view->run('coupon.add');
    }
    public function R()
    {
        $coupon = parent::getAll();
        return $this->view->run('coupon.list',['coupon'=>$coupon]);
    }
    public function U($id)
    {
            $coupon = $this->getByid($id);

            return $this->view->run('coupon.update',['coupon'=>$coupon]);
    }
    public function D($id)
    {
        if ($id !== null) {
            parent::delete($id);
        }
    }
    // Thực hiện Cre và Upd ===> POST 
    public function Cre()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $couponCode = isset($_POST["couponCode"]) ? $_POST["couponCode"] : '';
            $discount = isset($_POST["discount"]) ? $_POST["discount"] : '';
            $expiryDate = isset($_POST["expiryDate"]) ? $_POST["expiryDate"] : '';
            $createAt = isset($_POST["createAt"]) ? $_POST["createAt"] : '';
            parent::insert($couponCode,$discount,$expiryDate,$createAt);
        }
        echo '<script>
        alert("Tạo Xong");
        window.location.href="/PHP2/LAB4/";
        </script>';
    }
    public function Upd($id)
    {
        $coupon = $this->getByid($id);
        if ($coupon) {
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                $couponCode = isset($_POST["couponCode"]) ? $_POST["couponCode"] : '';
                $discount = isset($_POST["discount"]) ? $_POST["discount"] : '';
                $expiryDate = isset($_POST["expiryDate"]) ? $_POST["expiryDate"] : '';
                $createAt = isset($_POST["createAt"]) ? $_POST["createAt"] : '';
                parent::update($id,$couponCode,$discount,$expiryDate,$createAt);
            }
        }
        echo '<script>
        alert("Cập Nhật Xong");
        window.location.href="/PHP2/LAB4/";
        </script>';
    }
}
