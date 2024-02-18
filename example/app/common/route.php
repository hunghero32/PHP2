<?php

use Phroute\Phroute\RouteCollector;

$url = !isset($_GET['url']) ? "/" : $_GET['url'];

$router = new RouteCollector();

// filter check đăng nhập
// $router->filter('auth', function(){
//     if(!isset($_SESSION['auth']) || empty($_SESSION['auth'])){
//         header('location: ' . BASE_URL . 'login');die;
//     }
// });


//bắt đầu định nghĩa ra các đường dẫn
$router->get('/', function(){
    return "trang chủ";
});
$router->get('test', [App\Controllers\ProductController::class, 'index']);
$router->get('list', [App\Controllers\ProductController::class, 'listProduct']);
$router->get('add-product',[App\Controllers\ProductController::class, 'addProduct']);
$router->post('add',[App\Controllers\ProductController::class, 'addPro']);


$router->post('update/{id}',[App\Controllers\ProductController::class, 'update']);
$router->get('delete/{id}',[App\Controllers\ProductController::class, 'delete']);

$router->get('updateProduct/{id}',[App\Controllers\ProductController::class,'getProductById']);
# NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);

// Print out the value returned from the dispatched function
echo $response;


?>