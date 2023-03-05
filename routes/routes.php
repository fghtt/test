<?php

use App\Route\Router;

$routes = [
    '/\/upload\/(.+)\/(.+)/' => ['asdsa', 'asds']
];

$router = new Router();
$router->setRoutes($routes);