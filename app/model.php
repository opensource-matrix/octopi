<?php
/*
Model
-----
Models are used to provide data to the templating engine.
*/
namespace Octopi\Model;

class Model {
    public $test = 'string';
    public function getData() {
        return get_object_vars($this);
    }
}