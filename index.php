<?php
/*
Loader
------
Loads the autoloader provided with Composer.
*/
$loader = require 'vendor/autoload.php';
$loader->register();

/*
Route Modules
-------------
Load the Routes to be used later one.
*/
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

/*
Get Routes
----------
This allows us to use the routes in routes/routes.php
*/
$routes = $Route->getData();
$gets = $routes['gets'];
$posts = $routes['posts'];


/*
Kernel Modules
--------------
The Kernel modules power both ends of your application. They
are utilized in this very script.
*/
include 'app/get.php';
include 'app/post.php';

/*
Good Checking
-------------
If good is false, that means that the requested page is not found.
*/
if(!$good) {
    $response->setContent('Not found.');
    $response->setStatus(404);
}

/*
Send the Response
-----------------
This sends the response to the client, whether it's a web browser or an HTTP request.
*/
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