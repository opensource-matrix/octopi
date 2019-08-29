<?php

function doPost($posts, $path, $response) {
    $good = False;
    foreach($posts as $route) {
        if($route['path'] === $path) {
            if(is_callable($route['controller'])) {
                echo
                $func = $route['controller'];
                $response->setContent($func());
                $good = True;
            }
        }
    }
    return $good;
}