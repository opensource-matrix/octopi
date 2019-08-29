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
    public $_this

    public function __construct() {
        $this->gets = array();
    }

    public static function get($path, $controller) {
        echo '<br><br>Exists: ';
        echo isset($Route) ? 'true' : 'false';
    }
}

$Route = new octopi_routes();