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
    public $_this;

    public function __construct() {
        $this->$gets = array();
        $this->$_this = $this;
    }

    public function get($path, $controller) {
        array_push($this->$gets, array(
            'path' => $path,
            'controller' => $controller
        ));
    }
}

$Route = new octopi_routes();