<?php

namespace App;

use App\Exceptions\ViewNotFoundException;

class View
{
    /**
     * @param string $view
     * @param array $params
     */
    public function __construct(protected string $view, protected array $params = [])
    {
        //
    }

    public function render(): string
    {
        $viewPath = view_path($this->view);

        if (! file_exists($viewPath))
            throw new ViewNotFoundException();

        extract($this->params);

        ob_start();

        include $viewPath;

        return (string)ob_get_clean();
    }

    public function __get(string $name)
    {
        return $this->params[$name] ?? null;
    }
}