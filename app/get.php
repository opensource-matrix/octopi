<?php

function doGet() {
    $good = False;
    foreach($gets as $route) {
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

echo 'her';
if($_SERVER['REQUEST_METHOD'] == 'GET') {
    doGet();
}