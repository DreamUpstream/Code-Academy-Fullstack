<?php

require_once __DIR__ . '../../vendor/autoload.php';
// echo $_SERVER['REQUEST_URI'];
$router = new \Bramus\Router\Router();
$router->get('/store/orders/{orderID}', function($orderID) {
    echo "Hi" . $orderID;
});

$router->get('/', function() {
    echo 'Index page';
});
$router->run();