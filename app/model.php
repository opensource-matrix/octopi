<?php
/*
Model
-----
Models are used to provide data to the templating engine.
*/


class Model {
    public $test = 'string';
    public function getData() {
        return get_object_vars($this);
    }
}