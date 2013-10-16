<?php

include_once("../models/Model.php");
include_once("../models/VideoModel.php");

class VideosController {

    public function __construct(){
        $this->VideoModel = new VideoModel();
        $this->Model = new Model();
    }

    public function index() {
        $all_videos = $this->VideoModel->all();
        asort($all_videos)
        include "../views/videos/index.php";
    }

    public function show(){
        $video = $this->VideoModel->find($_GET['id']);
        include '../views/videos/show.php';
    }
}
