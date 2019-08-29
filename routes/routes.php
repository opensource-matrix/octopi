<?php

$Route::get('/', function() {
    return "Hello, world!";
});
$Route::get('/home', 'index.php');