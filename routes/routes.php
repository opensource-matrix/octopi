<?php

$Route::get('/:test', function() {
    echo 'Test';
    return view('index');
});