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
    public 

    public function __construct() {
        $this->gets = new ArrayObject();
        echo "Hello world from __construct <br>";
        print_r($this->gets);
    }

    public static function get($path, $controller) {
        $this->gets.append(array(
            'path' => $path,
            'controller' => $controller
        ));
        echo 'hello, world!';
    }

    function getData() {
        return array(
            'get' => $this->gets
        );
    }
}

$Route = new octopi_routes();