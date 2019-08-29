<?php
/*
Grill
-----
Grill is Octopi's templating engine for models & views.  It's
built in, and it's not directly used by the user.
*/

class grill
{
    // Tags array
    private $tags = [];
 
    // Template file
    private $template;

    public function __construct($text) {
        $this->$template = $text;
    }
    
    public function set($tag, $value)
    {
        $this->tags[$tag] = $value;
    }
}