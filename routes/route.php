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
    public $gets;

    public function __construct() {
        $this->gets = array();
        echo "Hello world from __construct <br>";
        print_r($this->gets);
    }

    public static function get($path, $controller) {
        print_r(isset($Route) ? 'true' : 'false');
    }
}

$Route = new octopi_routes();