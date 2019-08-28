<?php
    $loader = require 'vendor/autoload.php';
    $loader->register();

    use Symfony\Component\HttpFoundation\Request;
    
    $request = Request::createFromGlobals();
    
    switch($request->getPathInfo()) {
        case '/':
            echo 'This is the home page';
            break;
        case '/about':
            echo 'This is the about page';
            break;   
        default:
            echo 'Not found!';
    }