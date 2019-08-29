<?php
require_once 'route.php';

$routes = [
    new Route('/', 'index.php'),
    new Route('/home', 'index.php')
];