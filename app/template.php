<?php
/*
Grill
-----
Grill is Octopi's templating engine for models & views.  It's
built in, and it's not directly used by the user.
*/

function Grill($file, $data)
{
   $template = file_get_contents($file);

   foreach($data as $key => $value)
   {
     $template = str_replace('{'.$key.'}', $value, $template);
   }

   return $template;
}