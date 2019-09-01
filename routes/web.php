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
    $model = new UserModel()
    return view('index', new UserModel($name));
});