<?php

$Route::get('/', function() {
    return 'Hello!';
});

$Route::get('/user/:name', function($name) {
    $str = '<div>' . $name;
    if($name == 'Octopi') {
        $str = $str . ': [ADMIN]';
    } else {
        $str = $str . '</div>'
    }
    return $str;
});