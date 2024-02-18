<?php
include_once 'vendor/eftec/bladeone/lib/BladeOne.php';
use eftec\bladeone\BladeOne;

    function render($viewFile, $data = []){
        $views = "./app/views";
        $cache = "./app/cache";
        $blade = new BladeOne($views,$cache, BladeOne::MODE_DEBUG);
        echo $blade->run($viewFile, $data);
    }

?>
