<?php

use App\Route\Router;

$routes = [
    '/\/index/' => [\Controllers\UploadController::class, 'index'],
    '/\/upload/' => [\Controllers\UploadController::class, 'store']
];

$router = new Router();
$router->setRoutes($routes);