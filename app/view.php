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
  
        while(! feof($fn))  {
	        $result = fgets($fn);
	        echo $result;
        }

        fclose($fn);
    }
}