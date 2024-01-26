<?php

use Phroute\Phroute\RouteCollector;
use App\controller\PetController;

require_once 'vendor/autoload.php';

session_start();

$url = !isset($_GET['url']) ? "/" : $_GET['url'];
$router = new RouteCollector();

// Add filter for checking login
$router->filter('auth', function(){
    if (!isset($_SESSION['auth']) || empty($_SESSION['auth'])){
        header('location: ' . BASE_URL . 'login');
        die;
    }
});
// $router->get('/', function(){return "trang chủ";});
// Define routes
$router->get('/', [PetController::class, 'view']);
$router->get('add', [PetController::class, 'create']);
$router->post('add', [PetController::class, 'createPet']);
$router->get('update/{id}', [PetController::class, 'update']);
$router->post('update/{id}', [PetController::class, 'updatePet']);
$router->get('delete/{id}', [PetController::class, 'deletePet']);
$router->get('list', [PetController::class, 'view']);

// ... Your other code ...

// Get data from the router
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

// Dispatch the route
$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);

// Print out the value returned from the dispatched function
echo $response;
