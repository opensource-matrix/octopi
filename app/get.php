<?php

function doGet($gets, $path, $response) {
    $good = False;
    $vars = array();
    foreach($gets as $route) {
        $paths = explode('/', $route['path']);
        $i = 0;
        foreach($paths as $pathseg) {
            preg_match('/\{([a-zA-Z0-9-_]*)\}/', $pathseg, $matches);
            $vars[$matches[1]] = i;
            i = i + 1;
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