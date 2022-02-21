<?php

use App\Controllers\BookController;
use App\Helper;
use FastRoute\RouteCollector;

define('ROOT_PATH', dirname(__DIR__));

require_once ROOT_PATH . '/vendor/autoload.php';

(Dotenv\Dotenv::createUnsafeImmutable(ROOT_PATH))->load();

date_default_timezone_set('Europe/Vilnius');

$dispatcher = FastRoute\simpleDispatcher(function (FastRoute\RouteCollector $r) {
    $r->addGroup('/api/v1', function (RouteCollector $r) {
        $r->addGroup('/books', function (RouteCollector $r) {
            $r->addRoute('GET', '', BookController::class . '/getAllBooks');
            $r->addRoute('POST', '', BookController::class . '/createBook');
            $r->addRoute('PATCH', '/{id}', BookController::class . '/updateBookById');
            $r->addRoute('DELETE', '/{id}', BookController::class . '/deleteBookById');
        });
    });
});

// Fetch method and URI from somewhere
$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

// Strip query string (?foo=bar) and decode URI
if (false !== $pos = strpos($uri, '?')) {
    $uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);

$routeInfo = $dispatcher->dispatch($httpMethod, $uri);

switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        echo Helper::buildResponseMessage('Route not found.', false);
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        echo Helper::buildResponseMessage('Method not allowed.', false);
        break;
    case FastRoute\Dispatcher::FOUND:
        $handler = $routeInfo[1];
        $vars = $routeInfo[2];
        list($class, $method) = explode("/", $handler, 2);
        echo call_user_func_array([new $class, $method], $vars);
        break;
}