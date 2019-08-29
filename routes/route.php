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
    public function __construct() {
        $this->gets = array();
    }

    public static function get($path, $controller) {
        print_r($this->gets);
        $this->gets[$path] = $controller;
    }

    function getData() {
        return array(
            'get' => $this->gets
        );
    }
}

$Route = new octopi_routes();