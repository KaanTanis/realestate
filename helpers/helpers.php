<?php

use App\Core\View;

/**
 * Get storage folder path
 *
 * @return string
 */
function storage_path(): string
{
    return __DIR__ . '/../public/storage';
}

/**
 * Get view folder path from named view
 *
 * @param $view
 * @return string
 */
function view_path($view): string
{
    return __DIR__ . "/../views/$view.php";
}

/**
 * Call view class shortly and render view
 *
 * @param $view
 * @param null $params
 * @return string
 * @throws \App\Exceptions\ViewNotFoundException
 */
function view($view, $params = null): string
{
    return (string)(new View($view, $params))->render();
}

function rootPath(): string
{
    return (string) __DIR__ . '/../';
}

function publicPath(): string
{
    return (string) __DIR__ . '/../public';
}
