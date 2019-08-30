<?php

class DataModel extends Model {
    public $websiteName = 'My Octopi Website';
    public $description = 'This website was made as an example for Octopi.  No username was provided!  Go to /user/{name} for a better version of myself.';
}

class DataModel2 extends Model {
    public $websiteName = 'My Octopi Website';
    public $description = 'Ah, you did it!  Thanks kind sir.';

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