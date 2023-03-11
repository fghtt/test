<?php
ini_set('display_errors', 'Off');

require "./vendor/autoload.php";
require "./routes/routes.php";

$router = new App\Route\Router();
$router->setRoutes($routes);

$app = new App\Core\App($router);
$app->start();
