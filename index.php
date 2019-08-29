<?php
/* Load the Website */
$loader = require 'vendor/autoload.php';
$loader->register();

include 'routes/routes.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$request = Request::createFromGlobals();
$response = new Response();

$path = $request->getPathInfo();

function join_paths() {
    $paths = array();

    foreach (func_get_args() as $arg) {
        if ($arg !== '') { $paths[] = $arg; }
    }

    return preg_replace('#/+#','/',join('/', $paths));
}
/* Get Routes */
$gets = $Route->$gets;
print_r($gets);
foreach($gets as $route) {
    echo $route;
    /*
    if($route['path'] === $path) {
        if(!file_exists(join_paths('controllers', $route['controller']))) {
            echo "Path does not exist.";
        } else {
            require_once join_paths('controllers', $route['controller']);
            $good = True;
        }
        //$good = True;
    }
    */
}

if(!$good) {
    echo '404; path not found :(';
}

/*
switch ($request->getPathInfo()) {
    case '/':
        $response->setContent('This is the website home');
        break;
    case '/about':
        $response->setContent('This is the about page.');
        break;
    default:
        $response->setContent('Not found!');
        $response->setStatusCode(Response::HTTP_NOT_FOUND);
}
*/

$response->send();