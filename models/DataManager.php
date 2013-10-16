<?php

class DataManager {

    //here goes some hardcore values to simulate the database
    public function __construct(){

        // 1. Creates a database connection
        $this->dbhost = "localhost";
        $this->dbuser = "root";
        $this->dbpass = "root";
        $this->dbname = "bdf1013";
    }// __construct()

    public function db() {
        $db = new mysqli($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname); 
        if (mysqli_connect_errno()) {
            printf("Connection failed: %s\n", mysqli_connect_error());
            exit();
        }
        
        return $db;
    }
}

