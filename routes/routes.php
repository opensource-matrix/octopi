<?php

$Route::get('/', function() {
    echo "Hello, world!  This is slightly different "
});
$Route::get('/home', 'index.php');