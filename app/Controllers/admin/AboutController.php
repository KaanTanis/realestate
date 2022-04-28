<?php

namespace App\Controllers\Admin;

use App\App;
use App\Models\User;

class AboutController
{
    public function index()
    {
        $users = new User();
        var_dump($users->all());
    }
}