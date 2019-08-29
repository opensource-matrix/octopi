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
    
    private function set($tag, $value) {
        $this->tags[$tag] = $value;
    }

    private function replaceTags() {
        foreach ($this->tags as $tag => $value) {
            $this->template = str_replace('{'.$tag.'}', $value, $this->template);
        }
    
        return true;
    }

    public function render($tags) {
        foreach($tags as $key => $value) {
            
        }
        $this->replaceTags();
        echo $this->template;
    }
}