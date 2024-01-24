<?php

use Phroute\Phroute\RouteCollector;
use App\Controller\UserController;

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

// Define routes
$router->get('/', [UserController::class, 'listAcc']);
$router->get('add', [UserController::class, 'create']);
$router->post('add', [UserController::class, 'createAcc']);
$router->get('update/{id}', [App\Controller\UserController::class, 'update']);
$router->post('update/{id}', [App\Controller\UserController::class, 'updateAcc']);
$router->get('delete/{id}', [UserController::class, 'deleteAcc']);
$router->get('list', [UserController::class, 'listAcc']);

// Get data from the router
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

// Dispatch the route
$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);

// Print out the value returned from the dispatched function
echo $response;
