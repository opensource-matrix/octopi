<?php

class IndexController extends Controller {
    public function doc($name) {
        $gen = new UrlGenerator();
        return view('index', [
            'page_content' => markdown($name, [])
        ]);
    }
}