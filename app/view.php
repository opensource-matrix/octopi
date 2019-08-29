<?php

function join_paths() {
    $paths = array();

    foreach (func_get_args() as $arg) {
        if ($arg !== '') { $paths[] = $arg; }
    }

    return preg_replace('#/+#', DIRECTORY_SEPARATOR, join(DIRECTORY_SEPARATOR, $paths));
}

function view($path) {
    if(file_exists(join_paths(__DIR__, 'views', '..', $path))) {
        $fn = fopen(join_paths(__DIR__, 'views', '..', $path), 'r') or die('Unable to open file!');
        return fread($fn, filesize(join_paths(__DIR__, 'views', '..', $path), 'r'));
    } else {
        echo 'TEST';
    }
}