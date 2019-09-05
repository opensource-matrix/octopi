<?php

class Controller {
    public function call($method, $args) {
        call_user_func_array($this->{$method}, $args);
    }
}