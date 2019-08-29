<?php

$Route::get('/', function() {
    if(_GET['test'] == 'true') {
        return view('test');
    } else {
        return view('index');
    }
});