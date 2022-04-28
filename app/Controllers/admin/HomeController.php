<?php

namespace App\Controllers\Admin;

class HomeController
{
    public function index(): string
    {
        return \view('admin/index', [
            'param' => 'Gönderilen parametre'
        ]);
    }
}