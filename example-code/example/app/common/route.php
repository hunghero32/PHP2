<?php

use Phroute\Phroute\RouteCollector;
use App\controllers\SachController;

$url = !isset($_GET['url']) ? "/" : $_GET['url'];

$router = new RouteCollector();

//bắt đầu định nghĩa ra các đường dẫn
// $router->get('/', function(){
//     return "trang chủ";
// });
$router->get('/', [SachController::class, "getSach"]);

$router->get('list', [SachController::class, "getSach"]);

// add sách
$router->get('addSach', [SachController::class, "addSach"]);
$router->post('add', [SachController::class, "add"]);

// update
$router->get('getSachById/{id}', [SachController::class, "getById"]);
$router->post('update/{id}', [SachController::class, "update"]);

// delete
$router->get('delete/{id}', [SachController::class, "delete"]);


# NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);

// Print out the value returned from the dispatched function
echo $response;


?>