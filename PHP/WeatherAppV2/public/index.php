<?php 

use App\Controllers\ServerController;

define('ROOT_PATH', dirname(__DIR__));

require_once ROOT_PATH . '/vendor/autoload.php';

// Create Router instance
$router = new Bramus\Router\Router();

// Define routes
$router->get('/', ServerController::class . '@getIndex');
$router->get('weather/places/find/(\w+)', ServerController::class . '@findPlace');
$router->get('weather/forecast/find/(\w+)', ServerController::class . '@findForecast');
// Run it!
$router->run();

?>
