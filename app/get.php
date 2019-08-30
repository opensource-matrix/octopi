<?php
require_once 'pathtoregex.php';

function doGet($gets, $path, $response) {
    $good = False;
    foreach($gets as $route) {
        $keys = array();
        $regex = PathToRegexp::convert($route['path'], $keys);
        echo $regex;
        if(preg_match($regex, $path) == 1) {
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
    $good = doGet($gets, $path, $response);
}