<?php

namespace App\Controllers\Admin;

use App\View;

class HomeController
{
    public function index(): string
    {
//        return (new View('admin/index'))->render();
        return \view('admin/index', [
            'foo' => 'bar'
        ]);
    }
}