<?php
require_once 'route.php';
$Route = new octopi_routes();

$Route::get('/', 'index.php');