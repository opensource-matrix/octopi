<?php
require_once 'route.php';
$Route = new octopi_route();

$Route::get('/', 'index.php');