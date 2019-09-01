<?php

class UserModel extends Model {
    public $user;
    public function __construct($user) {
        $this->$user = $user;
    }
}

$Route::get('/', function() {
    return 'Hello!';
});

$Route::get('/user/:name', function($name) {
    return view('index');
});