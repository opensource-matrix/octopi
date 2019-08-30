<?php

$Route::get('/user', function() {
    return view('index', 'index');
});

$Route::get('/user/:name', function() {
    return view('index');
});