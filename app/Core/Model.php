<?php

namespace App\Core;

abstract class Model
{
    protected DB $db;

    public function __construct()
    {
        $this->db = App::db();
    }

    public function all(): bool|array
    {
        return $this->db
            ->query('SELECT * FROM ' . $this->table)->fetchAll();
    }

    public function find()
    {
        //
    }
}