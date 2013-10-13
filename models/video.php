<?php

class video {
    public $title;
    public $author;
    public $description;

    public function showHeader(){
        include "../views/header.inc";
    }

    public function __construct($title, $author, $description)
    {
        $this->title = $title;
        $this->author = $author;
        $this->description = $description;
    }
}
