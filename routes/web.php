<?php

class UserModel extends Model {
    public $user;
}

$Route::get('/', function() {
    return 'Hello!';
});

$Route::get('/user/:name', function($name) {
    $model = new UserModel();
    $model->$user = $name;
    return view('index', $model);
});