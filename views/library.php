<?php

echo '<a class="large-4 columns button radius success" href="../index.php"><-- Go Back Home</a><hr><br />';

    //controller
    include_once('../controllers/videosController.php');
    $controller = new videosController();
    $controller->invoke();

echo '<a class="large-4 columns button radius success" href="../index.php"><-- Go Back Home</a><br />';
