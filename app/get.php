<?php

function doGet($gets, $path, $response) {
    $good = False;
    $regex = '/';
    foreach($gets as $route) {
        $paths = explode('/', $route['path']);
        $i = 0;
        foreach($paths as $pathseg) {
            if(!$pathseg == '') {
                preg_match('/\{([a-zA-Z0-9-_]*)\}/', $pathseg, $matches);
                if(isset($matches[1])) {
                    
                }
            }
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
   