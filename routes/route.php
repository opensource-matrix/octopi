<?php
class route {
    public function __construct($path, $controller) {
        if(!isset($path)) {
            throw new Exception();
        } elseif(!isset($controller)) {
            throw new Exception();
        } else {
            $this->path = $path;
            $this->controller = $controller;
        }
    }

    function getData() {
        return array(
            path => $this->path,
            controller => $this->controller
        );
    }
}

class octopi_routes {
    static $gets;
    static $posts;

    public function __construct() {
        $this::$gets = array();
        $this::$posts = array();
    }

    public static function get($path, $controller) {
        array_push(self::$gets, array(
            'path' => $path,
            'controller' => $controller
        ));
    }

    public static function get($path, $controller) {
        array_push(self::$gets, array(
            'path' => $path,
            'controller' => $controller
        ));
    }

    public function getData() {
        return array(
            'gets' => $this::$gets
        );
    }
}

$Route = new octopi_routes();