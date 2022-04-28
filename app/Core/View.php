<?php

declare(strict_types = 1);

namespace App\Core;

use App\Exceptions\ViewNotFoundException;

/**
 *
 */
class View
{
    /**
     * @param string $view
     * @param ?array $params
     */
    public function __construct(protected string $view, protected ?array $params = [])
    {
        //
    }

    /**
     * @return string
     * @throws ViewNotFoundException
     */
    public function render(): string
    {
        $viewPath = view_path($this->view);

        if (! file_exists($viewPath)) // File is there?
            throw new ViewNotFoundException();

        if ($this->params) // Are there any parameters?
            extract($this->params);

        ob_start();

        include $viewPath;

        return (string)ob_get_clean();
    }

    /**
     * Finally get params
     * @param string $name
     * @return string|null
     */
    public function __get(string $name): ?string
    {
        return $this->params[$name] ?? null;
    }
}