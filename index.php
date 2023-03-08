<?php
ini_set('display_errors', 'Off');

require "./vendor/autoload.php";
require "./routes/routes.php";

use App\Route\Router;

$router = new Router();
$router->setRoutes($routes);

use App\Core\App;

$app = new App($router);
$app->start();
