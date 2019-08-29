<?php

$Route::get('/', function() {
    if(_GET['test'] == 'true') {
        return view('index');
    } else {
        return view('index')
    }
});