<?php

class DataModel extends Model {
    public $websiteName = 'My Octopi Website';
    public $description = 'This website was made as an example for Octopi.  No username was provided!  Go to /user/{name} for a better version of myself.';
}

$Route::get('/', function() {
    return 'Hello!';
});

$Route::get('/user/:name', function($name) {
    return 'Hello, ' . $name . '!';
});