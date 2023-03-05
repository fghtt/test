<?php

require "./vendor/autoload.php";
require "./routes/routes.php";

use App\Core\App;

$app = new App($router);
$app->start();
