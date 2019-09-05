<?php

class UrlGenerator {
    public function convert($path) {
        if(isset($path)) {
            $components = array_slice(explode('/', $path), 1);
            $out = [];

            foreach($components as $component) {
                if(preg_match('/\{(.*?)\??\}/', $component)) {
                    array_push($out, '(.*)');
                } elseif(preg_match('/(.*)/', $component)) {
                    array_push($out, $component);
                }
            }

            $output = '/\/' . implode($out, '\/') . '[\/]?/';
            return $output;
        }
    }
    public function joinPaths() {
        $args = func_get_args();
        $paths = array();
        foreach ($args as $arg) {
            $paths = array_merge($paths, (array)$arg);
        }
    
        $paths = array_map(create_function('$p', 'return trim($p, "/");'), $paths);
        $paths = array_filter($paths);
        return join('/', $paths);
    }
}