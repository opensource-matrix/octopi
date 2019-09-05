<?php
define('OCTOPI_START', microtime(true), true);

require_once __DIR__.'/vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

include 'framework/Controller/Controller.php';
include 'framework/Router/Route.php';
include 'framework/Router/UrlGenerator.php';

$request = Request::createFromGlobals();
$response = new Response();

include 'routes/web.php';

/*
| Get the request's path.
|-----------------------------------------
| This will be passed to the router and compared to the
| provided paths.
*/
$path = $request->getRequestUri();

/*
| Replace keywords with their counterparts.
|-----------------------------------------
| This formats the string so '/test1%20test2' would instead
| be returned as '/test1 test2'.
*/
$path = str_replace('%20', ' ', $path);
Route::connect($path, $response);