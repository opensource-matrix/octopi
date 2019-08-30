<?php

class DataModel extends Model {
    public $websiteName = 'My Octopi Website';
    public $description = 'This website was made as an example for Octopi.  No username was provided!  Go to /user/{name}';
}

class DataModel2 extends Model {
    public $websiteName = 'My Octopi Website';

    public function __construct() {
        $this->$websiteName = 'My Octopi Website!';
    }
}

$Route::get('/user', function() {
    return view('index', new DataModel);
});

$Route::get('/user/:name', function() {
    return view('index', new DataModel2);
});