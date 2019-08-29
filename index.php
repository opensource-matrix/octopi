<?php
/* Load the Website */
$loader = require 'vendor/autoload.php';
$loader->register();

include 'routes/route.php';
include 'routes/routes.php';

/*
Kernel Modules
--------------
The Kernel modules power both ends of your application.
They are utilized in this very script.
*/
include 'app/get.php';
include 'app/post.php';

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

$routes = $Route->getData();
$gets = $routes['gets'];

/* GET Method */
if($_SERVER['REQUEST_METHOD'] == 'GET') {
    $good = doGet($gets, $path, $response);
} elseif($_SERVER['REQUEST_METHOD'] == 'POST') {
    $good = doPost($gets, $path, $response);
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