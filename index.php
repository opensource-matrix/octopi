<?php

require_once __DIR__.'/vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

include 'framework/Router/Route.php';
include 'framework/Router/UrlGenerator.php';

$request = Request::createFromGlobals();
$response = new Response();

Route::get('/name/{name}', function($name) {
    return 'Hello, ' . $name . '!';
});

Route::connect($request->getRequestUri(), $response);

$response->send();