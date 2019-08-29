<?php
/* Load the Website */

$loader = require 'vendor/autoload.php';
$loader->register();

require_once 'routes/routes.php';

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

foreach($routes as $route) {
    $data = $route->getData();
    if($data['path'] === $path) {
        if(!file_exists(join_paths('controllers', $data['controller']))) {
            echo "Path does not exist.";
        } else {
            require_once join_paths('controllers', $data['controller']);
            $good = True;
        }
        //$good = True;
    }
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