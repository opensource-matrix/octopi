<?php

function doGet($gets) {
    foreach($gets as $route) {
        if($route['path'] === $path) {
            if(is_callable($route['controller'])) {
                $func = $route['controller'];
                $func();
                $good = True;
            } elseif(gettype($route['controller']) == 'string') {
                if(!file_exists(join_paths('controllers', $route['controller']))) {
                    echo "Path does not exist.";
                } else {
                    require_once join_paths('controllers', $route['controller']);
                    $good = True;
                    echo "Test";
                }
            }
            //$good = True;
        }
    }
}