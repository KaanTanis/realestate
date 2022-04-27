<?php

declare(strict_types = 1);

namespace App;

use App\Exceptions\RouteNotFoundException;

/**
 * Router for execute URIs
 *
 * @author Kaan Tanış <kt@kaantanis.com>
 */
class Router
{
    /**
     * @var array|null
     */
    private ?array $routes;

    /**
     * @param string $method
     * @param string $route
     * @param callable|array $action
     * @return $this
     */
    final public function register(string $method, string $route, callable|array $action): self
    {
        $this->routes[$method][$route] = $action;
        return $this;
    }

    /**
     * @param string $route
     * @param callable|array $action
     * @return $this
     */
    final public function get(string $route, callable|array $action): self
    {
        return $this->register('get', $route, $action);
    }

    /**
     * @param string $route
     * @param callable|array $action
     * @return $this
     */
    final public function post(string $route, callable|array $action): self
    {
        return $this->register('post', $route, $action);
    }

    /**
     * @return array
     */
    final public function routes(): array
    {
        return $this->routes();
    }

    /**
     * @throws RouteNotFoundException
     */
    final public function resolve(string $requestUri, string $method): mixed
    {
        $route = explode('?', $requestUri)[0];
        $action = $this->routes[$method][$route] ?? null;

        if (! $action)
            throw new RouteNotFoundException();

        if (is_callable($action)) {
            return call_user_func($action);
        }

        if (is_array($action)) {
            [$class, $method] = $action;

            if (class_exists($class)) {
                $class = new $class();

                if (method_exists($class, $method)) {
                    return call_user_func_array([$class, $method], []);
                }
            }
        }

        throw new RouteNotFoundException();
    }
}