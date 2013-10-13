<?php
    //header
    $page_title = "Library";
    $content = "This is the ".$page_title . " PAGE";
    include('header.inc');

echo '<a class="large-4 columns button radius success" href="../index.php"><-- Go Back Home</a><hr><br />';

    //controller
    include_once('../controllers/controller.php');
    $controller = new Controller();
    $controller->invoke();

echo '<a class="large-4 columns button radius success" href="../index.php"><-- Go Back Home</a><br />';
