<?php 
    //include_once 'app/models/SachModel.php';
    //include_once 'app/controllers/BaseController.php';
    namespace App\controllers;
    use App\models\SachModel;

    class SachController extends BaseController{
        protected $sach;
        public function __construct(){
            $this->sach = new SachModel();
        }

        public function getSach() {
            $lstSach = $this->sach->getAllSach();
            //return $this->render('sach.index',compact('lstSach'));
            return $this->render('sach.index',['lstSach'=> $lstSach]);
        }

        public function addSach(){
            return $this->render('sach.add');
        }

        public function add(){
            if(isset($_POST['add'])){

                $error = [];
                if(empty($_POST['tenSach'])){
                    $error[] = "Tên sách không được để trống";
                }
                if(empty($_POST['tacGia'])){
                    $error[] = "Tác giả không được để trống";
                }
                if(empty($_POST['soLuong'])){
                    $error[] = "Số lượng không được để trống";
                }
                // check số lượng kiểu số

                if(!is_numeric($_POST['soLuong'])){
                    $error[] = "Số lượng phải là kiểu số";
                }
                if(empty($_POST['gia'])){
                    $error[] = "Giá không được để trống";
                }
                if(count($error)>0){
                    redirect('errors', $error, 'addSach');
                }else{
                    $this->sach->add($_POST['tenSach'], $_POST['tacGia'], $_POST['soLuong'], $_POST['gia']);
                    header("location: ".route('list'));
                }

               
            }
        }

        public function getById($id){
            $sachObj = $this->sach->getById($id);
            // var_dump($sachObj);
            return $this->render('sach.update',['sachObj'=> $sachObj]);
        }

        public function update($id){
            if(isset($_POST['update'])){
                 $this->sach->update($id,$_POST['tenSach'], $_POST['tacGia'], $_POST['soLuong'], $_POST['gia']);
            }
        }

        public function delete($id){
            $this->sach->delSach($id);
            header("location: ".route('list'));
        }
    }
?>