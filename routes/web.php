<?php

$Route::get('/', function() {
    return 'Hello!';
});

$Route::get('/user/:name', function($name) {
    $str = ''
    return '<h1>' . $name . '</h1>';
});