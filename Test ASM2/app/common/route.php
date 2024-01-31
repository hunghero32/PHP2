<?php

use Phroute\Phroute\RouteCollector;
use App\Controller\ProductController;
use App\Controller\TypeController;
use App\Controller\AccountController;
require_once 'vendor/autoload.php';

session_start();

$url = isset($_GET['url']) ? $_GET['url'] : '/';
$router = new RouteCollector();

// Assuming BASE_URL is defined elsewhere in your application
define('BASE_URL', 'http://yourdomain.com/'); // Replace with your actual base URL

// Add filter for checking login
$router->filter('auth', function(){
    if (!isset($_SESSION['auth']) || empty($_SESSION['auth'])){
        header('location: ' . BASE_URL . 'login');
        die;
    }
});

// Define routes
$router->get('/', [ProductController::class, 'r']);
// Account
$router->get('Alist', [AccountController::class, 'r']);
$router->get('Aadd', [AccountController::class, 'c']);
$router->get('Aupdate/{id}', [AccountController::class, 'u']);
$router->get('Adelete/{id}', [AccountController::class, 'd']);

$router->post('Aadd', [AccountController::class, 'Cre']);
$router->post('Aupdate/{id}', [AccountController::class, 'Upd']);
//=== Check Login 
$router->get('Acheck', [AccountController::class, 'check']);
$router->post('Acheck', [AccountController::class, 'SignIn']);

// Product
$router->get('Plist', [ProductController::class, 'r']);
$router->get('Padd', [ProductController::class, 'c']);
$router->get('Pupdate/{id}', [ProductController::class, 'u']);
$router->get('Pdelete/{id}', [ProductController::class, 'd']);

$router->post('Padd', [ProductController::class, 'Cre']);
$router->post('Pupdate/{id}', [ProductController::class, 'Upd']);

// Type 
$router->get('Tlist', [TypeController::class, 'r']);
$router->get('Tadd', [TypeController::class, 'c']);
$router->get('Tupdate/{id}', [TypeController::class, 'u']);
$router->get('Tdelete/{id}', [TypeController::class, 'd']);

$router->post('Tadd', [TypeController::class, 'Cre']);
$router->post('Tupdate/{id}', [TypeController::class, 'Upd']);

// Add this route to handle static assets
$router->get('/assets/{path:.+}', function($path) {
    // Specify the base directory where your assets are stored
    $baseDirectory = __DIR__ . '/public';

    // Combine the base directory with the requested path
    $file = $baseDirectory . '/' . $path;

    // Check if the file exists
    if (file_exists($file)) {
        // Set the appropriate content type based on the file extension
        $extension = pathinfo($file, PATHINFO_EXTENSION);
        $contentTypes = [
            'png' => 'image/png',
            'jpg' => 'image/jpeg',
            'jpeg' => 'image/jpeg',
            'gif' => 'image/gif',
            'css' => 'text/css', // Add more content types as needed
        ];

        if (isset($contentTypes[$extension])) {
            header('Content-Type: ' . $contentTypes[$extension]);
        }

        // Output the file content
        readfile($file);
        exit; // Exit to prevent the router from further processing
    }

    // If the file doesn't exist, let the router handle the request
    return null;
});

$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());
$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);

// Print out the value returned from the dispatched function
echo $response;
