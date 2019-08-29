<?php

function doGet($gets, $path, $response) {
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

echo $_SERVER['REQUEST_METHOD'];
print_r(isset($response));
if($_SERVER['REQUEST_METHOD'] == 'GET') {
    echo "TEST";
    doGet($gets, $path, $response);
}