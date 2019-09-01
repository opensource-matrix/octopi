<?php

class UserModel extends Model {
    public function __construct($user) {
        
    }
}

$Route::get('/', function() {
    return 'Hello!';
});

$Route::get('/user/:name', function($name) {
    return view('index');
});