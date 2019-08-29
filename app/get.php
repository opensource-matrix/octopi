<?php

function doGet($gets, $path, $response) {
    $good = False;
    $regex = '/';
    foreach($gets as $route) {
        $paths = explode('/', $route['path']);
        $i = 1;
        foreach($paths as $pathseg) {
            $g = preg_match('/\{([a-zA-Z0-9-_]*)\}/', $pathseg, $matches);
            if(g == 1) {
                $regex = $regex . '\/[a-zA-Z0-9-_]';
            } else {
                $regex = $regex . $paths[i];
            }
            $i++;
        }
        $regex = $regex . '/';
        echo $regex;
        print_r($vars);
        if(preg_match($regex, $path) == 1) {
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