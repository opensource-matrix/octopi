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
    public function __construct($path, $controller) {
        if(!isset($path)) {
            throw new Exception();
        } elseif(!isset($controller)) {
            throw new Exception();
        } else {
            $this->path = $path;
            $this->controller = $controller;
        }
        $this->get = array();
    }

    public function get($path, $controller) {
        array_push($this->get, array(
            path => $path,
            controller => $controller
        ))
    }

    function getData() {
        return array(
            'get' => $this->get
        );
    }
}