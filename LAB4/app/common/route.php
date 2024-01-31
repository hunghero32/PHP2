<?php

use Phroute\Phroute\RouteCollector;
use App\controller\CouponController;

require_once 'vendor/autoload.php';

session_start();

$url = !isset($_GET['url']) ? "/" : $_GET['url'];
$router = new RouteCollector();

define('BASE_URL', ''); // Replace with your actual base URL

// Add filter for checking login
$router->filter('auth', function(){
    if (!isset($_SESSION['auth']) || empty($_SESSION['auth'])){
        header('location: ' . BASE_URL . 'login');
        die;
    }
});
// $router->get('/', function(){return "trang chủ";});
// Define routes
$router->get('/', [CouponController::class, 'R']);
$router->get('add', [CouponController::class, 'C']);
$router->post('add', [CouponController::class, 'Cre']);
$router->get('update/{id}', [CouponController::class, 'U']);
$router->post('update/{id}', [CouponController::class, 'Upd']);
$router->get('delete/{id}', [CouponController::class, 'D']);
$router->get('list', [CouponController::class, 'R']);

// ... Your other code ...

// Get data from the router
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

// Dispatch the route
$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);

// Print out the value returned from the dispatched function
echo $response;
