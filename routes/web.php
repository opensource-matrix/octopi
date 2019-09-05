<?php

Route::get('/{oof}', function($oof) {
    $str = 'Hello, world!  (also ' .$oof. '!)';
    return $str;
});