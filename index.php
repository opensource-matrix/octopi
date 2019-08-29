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

foreach($routes as $route) {
    $data = $route->getData();
    if($data['path'] === $path) {
        echo $data['controller'].' ';
        echo file_exists('controllers/' + $data['controller']) ? 'EXISTS' : 'DOESN\'T EXIST';
        if(file_exists('controllers/' + $data['controller'])) {
            $response->setContent("Controller doesn't exist.");
            $response->status(404);
        } else {
            require_once 'controllers/' + $data['controller'];
            $good = True;
        }
        //$good = True;
    }
}

if(!$good === True) {
    
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