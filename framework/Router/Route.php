<?php

include './UrlGenerator.php';

class Route {
    /**
     * List of GET controllers.
     * 
     * @var array
     */
    public static $gets = [];

    /**
     * List of POST controllers.
     * 
     * @var array
     */
    public static $posts = [];

    /**
     * Add a GET controller.
     * 
     * @param string $path
     * @param Closure $controller
     * @return void
     */
    public static function get($path, $controller) {
        self::$gets[$path] = $controller;
    }

    public static function post($path, $controller) {
        self::$posts[$path] = $controller;
    }

    public static function connect($requestedPath, $response) {
        $urlgenerator = new UrlGenerator;

        if($_SERVER['REQUEST_METHOD'] == 'GET') {
            foreach(self::$gets as $path => $controller) {
                $regex = $urlgenerator->convert($path);
                $matches = [];
                $out = preg_match($regex, $requestedPath, $matches);

                if($out) {
                    $out_matches = array_slice($matches, 1);
                    $response->setContent(call_user_func_array($controller, array_slice($out_matches)));
                }
            }
        }
    }
}