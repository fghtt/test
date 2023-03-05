<?php

use App\Route\Router;

$routes = [
    '/\/upload/' => [\Controllers\UploadController::class, 'index']
];

$router = new Router();
$router->setRoutes($routes);