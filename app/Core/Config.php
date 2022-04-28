<?php

namespace App\Core;

/**
 * @property-read ?array $db
 */
class Config
{
    protected array $config = [];

    public function __construct()
    {
        (new DotEnv())->load();
        $this->config = [
            'db' => [
                'db_host' => getenv('DB_HOST'),
                'db_username' => getenv('DB_USERNAME'),
                'db_password' => getenv('DB_PASSWORD'),
                'db_database' => getenv('DB_DATABASE'),
                'db_connection' => getenv('DB_CONNECTION')
            ]
        ];
    }

    public function __get(string $name)
    {
        return $this->config[$name] ?? null;
    }
}
