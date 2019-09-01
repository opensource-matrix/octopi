<?php
require_once 'pathtoregex.php';

function doPost($posts, $path, $response) {
    $good = False;
    foreach($posts as $route) {
        $keys = array();
        $regex = PathToRegexp::convert($route['path'], $keys);
        $args = array();
        $res = preg_match($regex, $path, $args);
        $args = array_slice($args, 1);
        if($res == 1 || $route['path'] == '*') {
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

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $good = doPost($posts, $path, $response);
}