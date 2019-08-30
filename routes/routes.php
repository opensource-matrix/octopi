<?php

class DataModel extends Model {
    public $websiteName = 'My Octopi Website';
}

class DataModel2 extends Model {
    public $websiteName = 'My Octopi Website (But Better)';
}

$Route::get('/user', function() {
    return view('index', new DataModel);
});

$Route::get('/user/:name', function() {
    
    return view('index', new DataModel);
});