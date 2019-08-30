<?php

class DataModel extends Model {
    
}

$Route::get('/user', function() {
    return view('index', 'index');
});

$Route::get('/user/:name', function() {
    return view('index');
});