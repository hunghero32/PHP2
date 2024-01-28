<?php

use Phroute\Phroute\RouteCollector;
use App\Controller\Controller;

require_once 'vendor/autoload.php';

// Assuming BASE_URL is defined elsewhere in your application
define('BASE_URL', ''); // Replace with your actual base URL

session_start();

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
$router->get('/', [Controller::class, 'home']);
$router->get('product/{id}', [Controller::class, 'product']);
$router->get('add', [Controller::class, 'c']);
$router->get('update/{id}', [Controller::class, 'u']);
$router->get('delete/{id}', [Controller::class, 'd']);

$router->post('add', [Controller::class, 'Cre']);
$router->post('update/{id}', [Controller::class, 'Upd']);

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
            // Add more content types as needed
        ];

        if (isset($contentTypes[$extension])) {
            header('Content-Type: ' . $contentTypes[$extension]);
        }

        // Output the file content
        readfile($file);
    } else {
        // Return a 404 response if the file doesn't exist
        http_response_code(404);
        echo 'Not Found';
    }
    // Exit to prevent the router from further processing
    exit;
});

$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());
$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);

// Print out the value returned from the dispatched function
echo $response;
?>
