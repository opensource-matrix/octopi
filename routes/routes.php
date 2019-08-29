<?php

$Route::get('/', function() {
    if($_GET['test'] == 'true') {
        echo 'THIS IS A TEST';
    }
    return view('index.html');
});