<?php

/*
if($_SERVER['REQUEST_URI'] == '/') {
    header('Location: ' . $_SERVER['HTTP_HOST'] . '/home');
}
*/

Route::get('/', 'IndexController@index');
Route::get('/octopi/2/docs', 'IndexController@docmap');
Route::get('/octopi/2/docs/framework/{name}', 'IndexController@docframework');
Route::get('/octopi/2/docs/{name}', 'IndexController@doc');
Route::get('*', 'IndexController@notfound');