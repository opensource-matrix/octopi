<?php

function doGet($gets, $path, $response) {
    $good = False;
    $vars = array();
    foreach($gets as $route) {
        $paths = explode('/', $route['path']);
        foreach($paths as $pathseg) {
            preg_match('/\{([a-zA-Z0-9-_]*)\}/', $pathseg, $matches);
            print_r($matches);
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