<?php
namespace App\Core;

class Router {
    protected array $routes = [];

    public function get(string $path, $handler): void {
        $this->routes['GET'][$path] = $handler;
    }

    public function post(string $path, $handler): void {
        $this->routes['POST'][$path] = $handler;
    }

    public function dispatch(string $uri, string $method) {
        // Router dispatch logic
    }
}
