<?php

function doGet($gets) {
    $good = False;
    foreach($gets as $route) {
        echo "TEst!;
        if($route['path'] === $path) {
            if(is_callable($route['controller'])) {
                $func = $route['controller'];
                $func();
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