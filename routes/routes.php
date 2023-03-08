<?php

$routes = [
    '/\/index/' => [\Controllers\UploadController::class, 'index'],
    '/\/upload/' => [\Controllers\UploadController::class, 'store'],
    '/\/file/' => [\Controllers\FileController::class, 'index'],
    '/.*/' => [\Controllers\NotFoundController::class, 'index']
];