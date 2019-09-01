<?php
require_once 'pathtoregex.php';

function doGet($gets, $path, $response) {
    $good = False;
    foreach($gets as $route) {
        $keys = array();
        $regex = PathToRegexp::convert($route['path'], $keys);
        $args = array();
        $res = preg_match($regex, $path, $args);
        $args = array_slice($args, 1);
        if($res == 1 || ) {
            if(is_callable($route['controller'])) {
                $func = $route['controller'];
                $response->setContent(call_user_func_array($func, $args));
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