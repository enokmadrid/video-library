<?php

include_once("../models/videoModel.php");

class videosModel {

    //here goes some hardcore values to simulate the database
    private $db;
    private $query;

    public function __construct(){

        // 1. Creates a database connection
        $this->dbhost = "localhost";
        $this->dbuser = "root";
        $this->dbpass = "root";
        $this->dbname = "bdf1013";
        $this->db = mysqli_connect($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname);

        // 2. Performs database query
        $this->query  = "SELECT * ";
        $this->query .= "FROM videos ";

    }// __construct()


    public function getVideoList(){

        $result = mysqli_query($this->db, $this->query);
        $data = [0];

        while($video = mysqli_fetch_assoc($result)) {

            $videoArray = array('videoId'=>$video['videoId'],'title'=>$video['title'],'icon'=>$video['icon'],'subject'=>$video['subjectId']);

            $vId = $videoArray["videoId"];
            $vTitle = $videoArray["title"];
            $vIcon = $videoArray["icon"];
            $vSub = $videoArray["subject"];

            $assoc = ["videoId"=>$vId, "title"=>$vTitle, "icon"=>$vIcon, "subject"=>$vSub];

            ?>

            <pre>

              <?php echo "ID #". $vId; ?><br/>
              <?php echo '<a href="viewVideo.php?id='. $vId .' ">'. $vTitle.'</a>' ?><br/>
              <?php echo 'Subject ID: '.$vSub; ?><br/>
              <?php echo '<img src="../images/'. $vIcon . '">'; ?><br/>

            </pre>

            <?php array_push($data, $assoc);
            echo "<hr />";
        }

        return $data;
    }

    public function getVideo($title){
        $allVideos = $this->getVideoList();
        return $allVideos[$title];
    }
}

