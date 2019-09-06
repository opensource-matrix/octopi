<?php

class IndexController extends Controller {
    public function index() {
        return view('index', [
            'page_content' => markdown('home_page', []),
            'docs' => view('docs', []),
            'tuts' => view('tuts', [])
        ]);
    }

    public function docmap() {
        $gen = new UrlGenerator();
        return view('index', [
            'page_content' => markdown('doc_home', []),
            'docs' => view('docs', []),
            'tuts' => view('tuts', [])
        ]);
    }

    public function doc($name) {
        $gen = new UrlGenerator();
        return view('index', [
            'page_content' => markdown($name, []),
            'docs' => view('docs', []),
            'tuts' => view('tuts', [])
        ]);
    }

    public function docframework($name) {
        $gen = new UrlGenerator();
        $path = $gen->joinPaths('framework', $name);
        return view('index', [
            'page_content' => markdown($path, []),
            'docs' => view('docs', []),
            'tuts' => view('tuts', [])
        ]);
    }

    public function notfound() {
        return view('index', [
            'page_content' => '<h2>404 Not Found</h2>',
            'docs' => view('docs', []),
            'tuts' => view('tuts', [])
        ]);
    }
}