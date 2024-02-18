<?php 
    include_once 'app/models/SachModel.php';
    include_once 'app/controllers/BaseController.php';

    function getSach() {
        $lstSach = getAllSach();
        return render('sach.index',compact('lstSach'));
    }

?>