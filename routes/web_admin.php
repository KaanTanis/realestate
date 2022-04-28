<?php

use App\Core\Config;
use App\Controllers\Admin\AboutController;
use App\Controllers\Admin\HomeController;
use App\Core\App;

$router = new \App\Core\Router();

$router
    ->get('/', [HomeController::class, 'index'])
    ->get('/about', [AboutController::class, 'index'])
;


(new App($router, [
    'uri' => $_SERVER['REQUEST_URI'],
    'method' => $_SERVER['REQUEST_METHOD']
], new Config()))->run();