<?php

function doGet($gets, $path, $response) {
    $good = False;
    $parsed = parse_url($path);
    print_r($parsed);
    foreach($gets as $route) {
        if($route['path'] === $path) {
            if(is_callable($route['controller'])) {
                $func = $route['controller'];
                $response->setContent($func());
                $good = True;
            }
            //$good = True;
        }
    }
    return $good;
}

if($_SERVER['REQUEST_METHOD'] == 'GET') {
    $good = doGet($gets, $path, $response);
}