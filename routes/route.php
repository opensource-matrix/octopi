<?php
class Route {
    public function __construct($path, $controller) {
        if(!isset($path)) {
            throw new Exception();
        }
    }
}