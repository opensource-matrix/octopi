<?php

$Route::get('/', function() {
    return 'Hello!';
});

$Route::get('/user/:name', function($name) {
    return 'Hello, ' . $name . '!';
});