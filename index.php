<?php
/* Load the Website */
$loader = require 'vendor/autoload.php';
$loader->register();

include 'routes/route.php';
include 'routes/routes.php';

/*
Symfony Modules
---------------
The Symfony modules are used server side for HTTP requests.
They give Octopi data that powers controllers, routes, soon
models and views as well. 
*/
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
$posts = $routes['posts'];


/*
Kernel Modules
--------------
The Kernel modules power both ends of your application.
They are utilized in this very script.
*/
include 'app/get.php';
include 'app/post.php';

if($_SERVER['REQUEST_METHOD'] == 'GET') {
    doGet($gets, $path, $response);
}

if(!$good) {
    $response->setStatus(404);
}

$response->send();

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