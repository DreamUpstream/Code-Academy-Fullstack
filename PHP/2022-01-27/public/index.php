<?php
define('ROOT_PATH', dirname(__DIR__));
require_once ROOT_PATH . '/vendor/autoload.php';
// echo $_SERVER['REQUEST_URI'];
$router = new \Bramus\Router\Router();
$router->get('/store/orders/{orderID}', function($orderID) {
    echo "Hi" . $orderID;
});

$router->get('/', function() {
    echo 'Index page';
});

$router->get('/labas', function() {
    echo 'wtf';
});
$router->run();