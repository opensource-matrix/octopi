<?php
require_once 'route.php';
echo 'Hello, world!';
$Route = new octopi_routes();

$Route::get('/', 'index.php');