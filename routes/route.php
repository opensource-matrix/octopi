<?php
$routes = [
    'gets' => [],
    'posts' => []
];

class Route {
    public static function get($path, $controller) {
        array_push($routes['gets'], array(
            'path' => $path,
            'controller' => $controller
        ));
    }

    public static function post($path, $controller) {
        array_push($routes['posts'], array(
            'path' => $path,
            'controller' => $controller
        ));
    }

    public static function getData() {
        return $routes;
    }
}