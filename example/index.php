<?php
    session_start();
    require_once 'env.php';
    // require_once 'vendor/autoload.php';
    // require_once 'app/common/route.php'; 
    require_once 'app/controllers/SachController.php';
    echo getSach();
    // 1. gõ lệnh: composer init
    // 2. điền package name
    // 3. mô tả có thể để trống
    // 4. n
    // 5. package tpye: project hoặc không
    // 6. chạy: composer dumpautoload
    // 7. nếu sửa file composer.jon sử dụng câu lệnh: composer dump-autoload 

    // cài đặt thư viện phroute: composer require phroute/phroute
?>