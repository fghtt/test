<?php
ini_set('display_errors', 'Off');

require "./vendor/autoload.php";
require "./routes/routes.php";

use App\Core\App;

$app = new App($router);
$app->start();
