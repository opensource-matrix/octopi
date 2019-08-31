<?php

$Route::get('/', function() {
    return view('index', new DataModel);
});

$Route::get('/user/:name', function($name) {
    echo 'Hello, ' . $name;
    return view('index', new DataModel);
});