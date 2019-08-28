<?php
$request = $_SERVER['REQUEST_URI'];

$debug = False;

if(substr($request, 0, 7) == '/octopi') {
    $debug = True;
}

if($debug == True) {
    echo $request;
}
?>