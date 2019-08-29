<?php

$Route::get('/', function() {
    if($_POST['test'] == 'true') {
        echo 'THIS IS A TEST';
    }
    return view('index.html');
});