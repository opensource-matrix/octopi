<?php

function join_paths() {
    $paths = array();

    foreach (func_get_args() as $arg) {
        if ($arg !== '') { $paths[] = $arg; }
    }

    return preg_replace('#/+#','/',join('/', $paths));
}

function view($path) {
    if(file_exists(join_paths('views', '$path'))) {
        $fn = fopen("myfile.txt","r");
        $result = null;
        while(! feof($fn))  {
	        $result = fgets($fn);
        }

        fclose($fn);
    }
}