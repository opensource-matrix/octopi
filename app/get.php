<?php

function doGet($gets, $path, $response) {
    $good = False;
    $regex = '/';
    foreach($gets as $route) {
        $paths = explode('/', $route['path']);
        $i = 1;
        echo $regex . '<br>';
        foreach($paths as $pathseg) {
            $g = preg_match('/\{([a-zA-Z0-9-_]*)\}/', $pathseg, $matches);
            echo $g;
            if(g == 1) {
                $regex = $regex . '\/[a-zA-Z0-9-_]';
            } else {
                echo $paths[i]l;
                $regex = $regex . $paths[i];
            }
            $i++;
        }
        echo $regex . '<br>';
        $regex = $regex . '/';
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