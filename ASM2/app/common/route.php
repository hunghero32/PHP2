<?php

use Phroute\Phroute\RouteCollector;
use App\Controller\Controller;

require_once 'vendor/autoload.php';

$url = isset($_GET['url']) ? $_GET['url'] : '/';
$router = new RouteCollector();

// Add filter for checking login
$router->filter('auth', function(){
    if (!isset($_SESSION['auth']) || empty($_SESSION['auth'])){
        header('location: ' . BASE_URL . 'login');
        die;
    }
});

// bắt đầu định nghĩa ra các đường dẫn
// $router->get('/', function(){
//     return "trang chủ";
// });


//định nghĩa đường dẫn trỏ đến Controller
// Get CRUD
$router->get('/', [Controller::class, 'r']);
$router->get('add', [Controller::class, 'c']);
$router->get('update/{id}', [Controller::class, 'u']);
$router->get('delete/{id}', [Controller::class, 'd']);
// Post CRUD 
$router->post('add', [Controller::class, 'Cre']);
$router->post('update/{id}', [Controller::class, 'Upd']);




# NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);

// Print out the value returned from the dispatched function
echo $response;


?>