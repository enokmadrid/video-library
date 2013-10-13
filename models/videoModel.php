<?php

class videoModel {
    public $videoId;
    public $title;
    public $icon;
    public $subjectId;

    public function __construct($videoId, $title, $icon, $subjectId){
        $this->videoId = $videoId;
        $this->title = $title;
        $this->icon = $icon;
        $this->subjectId = $subjectId;
    }
}