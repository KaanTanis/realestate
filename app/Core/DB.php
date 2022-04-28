<?php

namespace App\Core;

use PDO;
use PDOException;

/**
 * @mixin PDO
 */
class DB
{
    private PDO $pdo;
    /**
     * @param array $config
     */
    public function __construct(array $config)
    {
        $defaultOptions = [
            PDO::ATTR_EMULATE_PREPARES => false,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ];

        try {
           $this->pdo = new PDO(
                $config['db_connection'] . ':host=' . $config['db_host'] . ';dbname=' . $config['db_database'],
                $config['db_username'],
                $config['db_password'],
               $config['options'] ?? $defaultOptions
            );
        } catch (PDOException $e) {
            echo 'Database connection failled: ' . $e->getMessage();
        }
    }

    public function __call(string $name, array $arguments)
    {
        return call_user_func_array([$this->pdo, $name], $arguments);
    }
}