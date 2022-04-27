<?php

use App\View;

function storage_path(): string
{
    return __DIR__ . '/../public/storage';
}

function view_path($view): string
{
    return __DIR__ . "/../views/$view.php";
}

function view($view, $params = null): string
{
    return (string)(new View($view, $params))->render();
}