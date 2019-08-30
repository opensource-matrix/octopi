<?php
require_once 'pathtoregex.php';

function doPost($posts, $path, $response) {
    $good = False;
    foreach($posts as $route) {
        $keys = array();
        $regex = PathToRegexp::convert($route['path'], $keys);
        if(preg_match($regex, $path) == 1) {
            if(is_callable($route['controller'])) {
                $func = $route['controller'];
                $response->setContent(call_user_func_array($func, $keys));
                $good = True;
            }
            //$good = True;
        }
    }
    return $good;
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $good = doPost($posts, $path, $response);
}