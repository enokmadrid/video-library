<?php

include_once("./models/DataManager.php");

class VideoModel extends DataManager {
    private $videoId;
    private $title;
    private $icon;
    private $subjectId;

    public function __construct($videoId, $title, $icon, $subjectId){
        parent::__construct();
        $this->videoId = $videoId;
        $this->title = $title;
        $this->icon = $icon;
        $this->subjectId = $subjectId;
    }

    public function save(){
        $save_query = "INSERT INTO videos "
        # TODO: Finish query to insert the current instance values e.g. $this->videoId, $this->title
        $connection = parent::db();

        $result = $connection->query($save_query);

        # TODO return true or false if the record was saved. 
    }

    public function destroy(){
        $destroy_query = "DELETE FROM videos WHERE videos.videoId == {$this->videoId}"
        # BOILER PLATE... Make connection
        # THEN RESULTS FROM CONNECTION QUERY $DESTROY_QUERY
    }

    public function update() {
        $update_query = "SOME QUERY" # TODO QUERY
        # BOILERPLATE
    }

    public static function find($id){
        $show_query = "SELECT * FROM videos WHERE videos.videoId = {$id}"
        $connection = parent::db();

        if ($result = $connection->query($show_query)) {
            if ($row = $result->fetch_assoc()) {
                return $row;
            } else {
                # TODO: Handle Error
                return NULL;
            }
        }
    }

    public static function all(){
        # RETURN AN ARRAY OF VIDEOS
        $list_query = "SELECT * FROM videos";
        $connection = parent::db();

        $videoArray = array();

        if ($result = $connection->query($list_query)) {

            while($row = $result->fetch_assoc()) {
                # MAYBE YOU WANT TO MAKE A NEW VideoModel With the attributes from row.
                # $video = self::__construct($row['videoId'], $row['title']...etc);
                # THen you would do something like array_push($videoArray, $video)
                array_push($videoArray, $row)
                # printf ("%s (%s)\n", $row["videoID"], $row["title"]);
            }
        }

        $connection->close();

        return $videoArray;
    }
}