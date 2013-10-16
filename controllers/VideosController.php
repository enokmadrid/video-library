<?php

include_once("../models/DataManager.php");
include_once("../models/VideoModel.php");

class VideosController {

    public function __construct(){
        $this->DataManager = new DataManager();
    }

    public function index() {
        $all_videos = ViewModel::all();
        asort($all_videos)
        include "../views/videos/index.php";
    }

    public function show(){
        $video = ViewModel::find($_GET['id']);
        include '../views/videos/show.php';
    }
}
