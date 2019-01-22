<?php

namespace Core;

class Router {
    private $_routes = [];

    public function route($url, $action) {
        $this->_routes[$url] = $action;
    }

    public function execute($url) {
        foreach ($this->_routes as $key => $value) {
            if (preg_match("#^" . $key . "$#", $url) === 1) {
                $exploded = explode("@", $value);
                $reflectionClass = new \ReflectionClass($exploded[0]);
                $controller = $reflectionClass->newInstanceArgs([$url]);
                $method = $reflectionClass->getMethod($exploded[1]);
                $method->invoke($controller);
                return true;
            }
        }
        return false;
    }
}
