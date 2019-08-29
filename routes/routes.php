<?php
echo isset(view);
$Route::get('/', function() {
    return view('index.html');
});