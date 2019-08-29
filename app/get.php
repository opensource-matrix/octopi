<?php

function doGet($gets, $path, $response) {
    $good = False;
    $regex = '/';
    foreach($gets as $route) {
        $paths = explode('/', $route['path']);
        $i = 0;
        foreach($paths as $pathseg) {
            if(!$pathseg == '') {
                $g = preg_match('/\{([a-zA-Z0-9-_]*)\}/', $pathseg, $matches);
                if(g) {
                    $regex = $regex . '\/[a-zA-Z0-9-_]';
                } else {
                    $regex = $regex . '';
                }
            }
            $i++;
        }
        print_r($vars);
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