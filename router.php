<?php

class Router {

    protected $routes = [
    ];

    function get($uri, $file) {
        $this->routes['GET'][$uri] = $file;
    }

    function post($uri, $file) {
        $this->routes['POST'][$uri] = $file;
    }

    function dispatch($uri, $method) {
        $uri = trim(parse_url($uri, PHP_URL_PATH) , '/');
        $method = strtoupper($method);
        return $this->routes[$method][$uri]
    }

}