<?php

use App\Controllers\Admin\AboutController;
use App\Controllers\Admin\HomeController;

$router = new \App\Router();

$router
    ->get('/', [HomeController::class, 'index'])
    ->get('/about', [AboutController::class, 'index'])
;

echo $router->resolve(
    $_SERVER['REQUEST_URI'],
    strtolower($_SERVER['REQUEST_METHOD'])
);