<?php

$Route::get('/', function() {
    return 'Hello!';
});

$Route::get('/user/:name', function($name) {
    $str = '<h1>' . $name . '</h1>';
    if($name == '')
    return '<h1>' . $name . '</h1>';
});