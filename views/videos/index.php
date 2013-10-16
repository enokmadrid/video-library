<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>3.1 Deliverable: MVC Read Data</title>

    <!-- CSS Stylesheets -->
    <link rel="stylesheet" href="stylesheets/normalize.css" />
    <link rel="stylesheet" href="stylesheets/main.css" />
    <link rel="stylesheet" href="stylesheets/custom.css" />

</head>
<body>
	<?php
		# TODO: Iterate through all $all_videos and do the printing here...
		# foreach($all_videos as &$video) {
		#   echo $video
		# }

		echo "Video Id #"  .$video["videoId"] . "<br />".
	    echo "Title: "     .$video["title"] . "<br />" .
	    echo "Icon url: "  .$video["icon"] . "<br />".
	    echo "Subject: "   .$video["subjectId"] . "<hr>"
	?>
</body>
</html>
