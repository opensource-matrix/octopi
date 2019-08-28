<?php
require_once 'route.php';

$routes = [
    new Route('/', 'index')
];

echo "Routes: ".$routes