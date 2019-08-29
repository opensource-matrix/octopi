<?php

function join_paths() {
    $paths = array();

    foreach (func_get_args() as $arg) {
        if ($arg !== '') { $paths[] = $arg; }
    }

    return preg_replace('#/+#', DIRECTORY_SEPARATOR, join(DIRECTORY_SEPARATOR, $paths));
}

function view($path) {
    $path = realpath(join_paths(__DIR__, '..', 'views', $path));
    if(file_exists($path)) {
        $handle = fopen($path, 'r') or die('Unable to open file!');
        $data = fread($path, filesize($path, 'r'));
        fclose($handle);
        return $data;
    } else {
        return 'Octopi View '.path.' does not exist.';
    }
}