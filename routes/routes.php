<?php

class DataModel extends Model {
    public $websiteName = 'My Octopi Website';
}

class DataModel2 extends Model {
    public $websiteName = 'My Octopi Website';

    public function __construct($user) {
        $this->$websiteName = 'My Octopi Website!';
    }
}

$Route::get('/user', function() {
    return view('index', new DataModel);
});

$Route::get('/user/:name', function() {
    return view('index', new DataModel);
});