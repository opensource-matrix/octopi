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
     * @param Closure|string $controller
     * @return void
     */
    public static function get($path, $controller) {
        self::$gets[$path] = $controller;
    }

    /**
     * Add a POST controller.
     * 
     * @param string $path
     * @param Closure|string $controller
     * @return void
     */
    public static function post($path, $controller) {
        self::$posts[$path] = $controller;
    }

    /**
     * Handle the requested path.
     * 
     * @param string $path
     * @param Closure|string $controller
     * @return void
     */
    public static function connect($requestedPath, $response) {
        $urlgenerator = new UrlGenerator;
        if($_SERVER['REQUEST_METHOD'] == 'GET') {
            $done = False;
            foreach(self::$gets as $path => $controller) {
                $regex = $urlgenerator->convert($path);
                $matches = [];
                $out = preg_match($regex, $requestedPath, $matches) ?: False;
                if($path == '/' && $requestedPath == '/' && !$done) {
                    $out_matches = array_slice($matches, 1);
                    if(is_callable($controller)) {
                        $response->setContent(call_user_func_array($controller, $out_matches));
                        $response->send();
                        $done = True;
                        break;
                    } elseif(gettype($controller) == 'string') {
                        $segs = explode('@', $controller);
                        $name = $segs[0] ?: 'IndexController';
                        $method = $segs[1] ?: 'show';
                        $fn = realpath($urlgenerator->joinPaths(__DIR__, '..', '..', 'public', substr($segs[0], -4) == '.php' ?: $segs[0] . '.php'));
                        if($fn) {
                            require $fn;
                            $comp = new $name;
                            if(is_subclass_of($comp, 'Controller')) {
                                $response->setContent(call_user_func_array(array($comp, $method), $out_matches));
                                $response->send();
                            } else {
                                throw new ErrorException('Must be a subclass of Controller.');
                            }
                        }
                        $done = True;
                        break;
                    }
                } elseif($out && $matches[0] == $requestedPath && !$done) {
                    $out_matches = array_slice($matches, 1);
                    if(is_callable($controller)) {
                        $response->setContent(call_user_func_array($controller, $out_matches));
                        $response->send();
                        $done = True;
                        break;
                    } elseif(gettype($controller) == 'string') {
                        $segs = explode('@', $controller);
                        $name = $segs[0] ?: 'IndexController';
                        $method = $segs[1] ?: 'show';
                        $fn = realpath($urlgenerator->joinPaths(__DIR__, '..', '..', 'public', substr($segs[0], -4) == '.php' ?: $segs[0] . '.php'));
                        if($fn) {
                            require $fn;
                            $comp = new $name;
                            if(is_subclass_of($comp, 'Controller')) {
                                $response->setContent(call_user_func_array(array($comp, $method), $out_matches));
                                $response->send();
                            } else {
                                throw new ErrorException('Must be a subclass of Controller.');
                            }
                        }
                        $done = True;
                        break;
                    }
                }
                if($path == '*' && !$done) {
                    $out_matches = array_slice($matches, 1);
                    if(is_callable($controller)) {
                        $response->setContent(call_user_func_array($controller, $out_matches));
                        $response->send();
                        $done = True;
                        break;
                    } elseif(gettype($controller) == 'string') {
                        $segs = explode('@', $controller);
                        $name = $segs[0] ?: 'IndexController';
                        $method = $segs[1] ?: 'show';
                        $fn = realpath($urlgenerator->joinPaths(__DIR__, '..', '..', 'public', substr($segs[0], -4) == '.php' ?: $segs[0] . '.php'));
                        if($fn) {
                            require $fn;
                            $comp = new $name;
                            if(is_subclass_of($comp, 'Controller')) {
                                $response->setContent(call_user_func_array(array($comp, $method), $out_matches));
                                $response->send();
                            } else {
                                throw new ErrorException('Must be a subclass of Controller.');
                            }
                        }
                        $done = True;
                        break;
                    }
                }
            }
        } elseif($_SERVER['REQUEST_METHOD'] == 'POST') {
            foreach(self::$posts as $path => $controller) {
                $regex = $urlgenerator->convert($path);
                $matches = [];
                $out = preg_match($regex, $requestedPath, $matches);

                if($out && $matches[0] == $requestedPath) {
                    $out_matches = array_slice($matches, 1);
                    $response->setContent(call_user_func_array($controller, $out_matches));
                    $response->send();
                    $done = True;
                    break;
                } elseif(gettype($controller) == 'string') {
                    $segs = explode('@', $controller);
                    $name = $segs[0] ?: 'IndexController';
                    $method = $segs[1] ?: 'show';
                    $fn = realpath($urlgenerator->joinPaths(__DIR__, '..', '..', 'public', substr($segs[0], -4) == '.php' ?: $segs[0] . '.php'));
                    if($fn) {
                        require $fn;
                        $comp = new $name;
                        if(is_subclass_of($comp, 'Controller')) {
                            $response->setContent(call_user_func_array(array($comp, $method), $out_matches));
                            $response->send();
                        } else {
                            throw new ErrorException('Must be a subclass of Controller.');
                        }
                    }
                    $done = True;
                    break;
                }
            }
        }
    }
}