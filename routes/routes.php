<?php
echo isset(view('index.html'));
$Route::get('/', function() {
    return view('index.html');
});