<?php

function doGet($posts, $path, $response) {
    $good = False;
    foreach($posts as $route) {
        if($route['path'] === $path) {
            if(is_callable($route['controller'])) {
                $func = $route['controller'];
                $response->setContent($func());
                $good = True;
            } else {
                $good = False;
            }
            //$good = True;
        }
    }
    return $good;
}