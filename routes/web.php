<?php

$Route::get('/', function() {
    return 'Hello!';
});

$Route::get('/user/:name', function($name) {
    $str = '<h1>' . $name . '</h1>';
    if($name == 'Octopi') {
        $str = $str . '<h3>[ADMIN]</h3>';
    }
    return $str;
});