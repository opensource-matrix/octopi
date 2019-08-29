<?php
require_once 'route.php';
echo 'Hello, world!';
$Route = new octopi_routes();
echo 'Hello, world!';

$Route::get('/', 'index.php');