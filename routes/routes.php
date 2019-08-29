<?php

$Route::get('/', function() {
    echo "Hello, world!  This is slightly different than the /home page, but it'll do.";
});
$Route::get('/home', 'index.php');