<?php
/*
Grill
-----
Grill is Octopi's templating engine for models & views.  It's
built in, and it's not directly used by the user.
*/

$mod = null;

class grill {
    public function __construct($model) {
        $this->model = $model;
    }
    private function data($matches) {
        return $this->model->getData()[$matches[1]];
    }
    private function data2($matches) {
        ob_start();
        eval($matches[1]);
        $out = ob_get_contents();
        ob_end_clean();
        return $out;
    }
    public function template($in) {
        $data = preg_replace_callback('/@([a-zA-Z0-9_]*)/', $this->data, $in);
        $data2 = preg_replace_callback('/\{\{(.*)\}\}/', $this->data2, $data2);
        return $data2;
    }
}

/*
function grill(string $in, $model) {
    if(gettype($model) == 'object') {
        if(is_subclass_of($model, 'Model')) {
            $data = preg_replace_callback('/@([a-zA-Z0-9_]*)/', function($matches) {
                $model_data = $GLOBALS['mod']->getData();
                print_r($model_data);
                return $model_data[$matches[1]];
            }, $in);
            $data2 = preg_replace_callback('/\{\{(.*)\}\}/', function($matches) {
                ob_start();
                eval($matches[1]);
                $out = ob_get_contents();
                ob_end_clean();
                return $out;
            }, $in);
            return $data2;
        }
    }
}
*/