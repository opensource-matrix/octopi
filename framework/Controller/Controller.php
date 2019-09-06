<?php

class Controller {
    /**
     * Call a method inside of this controller.
     * 
     * @param string $method
     * @param array $args
     * @return mixed
     */
    public function call($method, $args) {
        return call_user_func_array($this->{$method}, $args);
    }
}