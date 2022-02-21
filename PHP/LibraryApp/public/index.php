<?php

define('ROOT_PATH', dirname(__DIR__));

require ROOT_PATH . '/vendor/autoload.php';

// Create Router instance
$router = new \Bramus\Router\Router();

// Define routes
$router->match('GET', '/wtf', function() { echo "sweikinu"; });

// Run it!
$router->run();