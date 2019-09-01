<?php

$Route::get('*', function() {
    return view('index', [
        'websiteName' => 'Octopi Website',
        'user' => ''
    ]);
});

$Route::get('/user/:name', function($name) {
    return view('index', [
        'websiteName' => 'Octopi Website',
        'user' => $name
    ]);
});