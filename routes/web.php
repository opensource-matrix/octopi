<?php

Route::get('/', function() {
    return 'Hello, world!  (But it\'s a test)';
});

Route::get('/test', 'IndexController@index');