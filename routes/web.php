<?php

Route::get('*', function() {
    return view('error', [
        'websiteName' => 'Octopi Website',
        'code' => '404 Not Found'
    ]);
});

Route::get('/user/:name', function($name) {
    return view('index', [
        'websiteName' => 'Octopi Website',
        'user' => $name
    ]);
});