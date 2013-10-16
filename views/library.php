<?php

echo '<a class="large-4 columns button radius success" href="../index.php"><-- Go Back Home</a><hr><br />';

    //controller
    include_once('../controllers/VideosController.php');
    $controller = new VideosController();
    $controller->index();

echo '<a class="large-4 columns button radius success" href="../index.php"><-- Go Back Home</a><br />';
