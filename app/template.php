<?php
/*
Grill
-----
Grill is Octopi's templating engine for models & views.  It's
built in, and it's not directly used by the user.
*/

function Grill($file, $model) {
    if(is_subclass_of($model, 'Model')) {
        $data = $model->getData();
        foreach($data as $key => $value)
        {
            $data = str_replace('{'.$key.'}', $value, $data);
        }
        return $data;
    }
}