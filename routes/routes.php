<?php

class DataModel extends Model {
    public $websiteName = 'My Octopi Website';
}

$Route::get('/user', function() {
    return view('index', new DataModel);
});

$Route::get('/user/:name', function() {
    return view('index', new DataModel);
});