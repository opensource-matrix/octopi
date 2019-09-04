<?php
define('OCTOPI_START', microtime(true), true);

require_once __DIR__.'/vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

include 'framework/Router/Route.php';
include 'framework/Router/UrlGenerator.php';

$request = Request::createFromGlobals();
$response = new Response();

include 'routes/web.php';

$path = $request->getRequestUri();
Route::connect($path, $response);