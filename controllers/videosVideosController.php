<?php

include_once("../models/videosVideosModel.php");

class videosController {

    public function __construct(){
        $this->model = new videosModel();
    }

    public function invoke(){

        if (!isset($_GET['video'])){
            //no video is requested, we'll show a list of all the videos

            $all_Videos = $this->model->getVideoList();
            asort($all_Videos);
            include '../views/viewVideos.php';

        }else{
            //show the requested video.
            $video = $this->model->getVideo($_GET['video']);

            echo $video;

            include '../views/viewVideo.php';
        }
    }
}