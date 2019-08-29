<?php

function doGet($gets, $path) {
    $good = False;
    foreach($gets as $route) {
        if($route['path'] === $path) {
            if(is_callable($route['controller'])) {
                $func = $route['controller'];
                $response->setContent($func());
                $good = True;
            } elseif(gettype($route['controller']) == 'string') {
                if(!file_exists(join_paths('controllers', $route['controller']))) {
                    echo "Path does not exist.";
                } else {
                    include join_paths('controllers', $route['controller']);
                    $good = True;
                }
            }
            //$good = True;
        }
    }
    return $good;
}