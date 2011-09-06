<?php
	setcookie("user", $username, 0);
	setcookie("posts", $posts, 0);
	setcookie("comments", $comments, 0);

	mysqli_close($con);

	header( 'Location: index.php' );
?>