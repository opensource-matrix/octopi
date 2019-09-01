<?php

class UserModel extends Model {
    
}

$Route::get('/', function() {
    return 'Hello!';
});

$Route::get('/user/:name', function($name) {
    return view('index');
});