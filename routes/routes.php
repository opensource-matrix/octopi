<?php

$Route::get('/hello/:test', function() {
    echo 'Test';
    return view('index');
});