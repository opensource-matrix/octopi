<?php

/*
Route::get('/{oof}', function($oof) {
    $str = 'Hello, world!  (also ' .$oof. '!)';
    return $str;
});
*/

Route::get('/', 'IndexController@test');
Route::get('/test', 'IndexController@index');