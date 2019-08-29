<?php

function doGet($gets, $path, $response) {
    $good = False;
    foreach($gets as $route) {
        $paths = explode('/', $route['path']);
        $paths.forEach() {
            
        }
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