<?php

define('OCTOPI_START', microtime(true), true);

require_once __DIR__.'/../vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

require '../framework/Http/ParseDown.php';

/**
 * Used for rendering views in Controllers.
 * 
 * @param string $name
 * @param array $model
 * @return string
 */
function view($name, $model) {
    $model = $model ?: [];
    $gen = new UrlGenerator();
    $path = realpath($gen->joinPaths('html', substr($name, -5) == '.html' ?: $name . '.html'));
    if(file_exists($path)) {
        $filecontent = file_get_contents($path);
    } else {
        $filecontent = '<h2>404 Not Found<h2>';
    }
    foreach($model as $key => $value) {
        $filecontent = str_replace('@get(\'' . $key . '\')', $value, $filecontent);
        $filecontent = str_replace('@get("' . $key . '")', $value, $filecontent);
    }
    // $filecontent = preg_replace('/(\@get\((.*)\))/', '', $filecontent);
    return $filecontent;
}

function markdown($name) {
    $model = $model ?: [];
    $gen = new UrlGenerator();
    $path = realpath($gen->joinPaths('markdown', substr($name, -3) == '.md' ?: $name . '.md'));
    if(file_exists($path)) {
        $filecontent = file_get_contents($path);
    } else {
        $filecontent = '<h2>404 Not Found</h2>';
    }
    $parsedown = new ParseDown();
    return $parsedown->text($filecontent);
}

require '../framework/Controller/Controller.php';
require '../framework/Router/Route.php';
require '../framework/Router/UrlGenerator.php';

$request = Request::createFromGlobals();
$response = new Response();

require '../routes/web.php';

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
$path = urldecode($path);
Route::connect($path, $response);