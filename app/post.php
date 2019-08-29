<?php

function doPost($posts, $path, $response) {
    $good = False;
    foreach($posts as $route) {
        echo 'Test';
        if($route['path'] === $path) {
            if(is_callable($route['controller'])) {
                $func = $route['controller'];
                $response->setContent($func());
                $good = True;
            }
        }
    }
    return $good;
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    doPost();
}