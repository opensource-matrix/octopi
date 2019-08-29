<?php
class octopi_route {
    public function __construct() {
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

    function get(path, controller) {

    }

    function getData() {
        return array(
            path => $this->path,
            controller => $this->controller
        );
    }
}