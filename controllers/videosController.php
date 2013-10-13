<?php

include_once("../models/Model.php");

class videosController {

    public function __construct(){
        $this->Model = new Model();
    }

    public function invoke(){

        if (!isset($_GET['video'])){
            //no video is requested, we'll show a list of all the videos

            $all_Videos = $this->Model->getVideoList();
            asort($all_Videos);
            include '../views/viewVideos.php';

        }else{
            //show the requested video.
            $video = $this->Model->getVideo($_GET['video']);

            echo $video;

            include '../views/viewVideo.php';
        }
    }
}