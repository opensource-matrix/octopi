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

            $output = '/\/' . implode($out, '\/') . '[\/]?\b/';
            return $output;
        }
    }
}