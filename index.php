<?php
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
    if($data.path === $path) {
        $response-setContent"Expected ".$data->path."!";
    }
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