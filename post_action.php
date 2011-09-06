<?php
/******************************************************************************
post_action.php
******************************************************************************/

	//Check for config.php file.
	if ((@include_once("config.php")) != 'OK')
	{
		die("config.php file missing. Please read README for more information.)");
	}

	//Check for mandatory information
	if (!defined('SITENAME') || !defined('SITEURL'))
	{
		die("Missing mandatory information! Please read README for more information.");
	}

	$title = $_POST['title'];
	$cont = nl2br($_POST['cont']);
	$l1 = $_POST['l1'];
	$l2 = $_POST['l2'];
	$l3 = $_POST['l3'];

	$user = $_COOKIE['user'];


	$query = "INSERT INTO posts (post, post_title, l1, l2, l3, posted_by, comments, upvotes, date) values ('" . $cont . "', '" . $title . "', '" . $l1 . "', '" . $l2 . "', '" . $l3 . "', '" . $_COOKIE['user'] . "', 0, 0, '" . date('Y-m-d') . "')";
	$result = mysqli_query($con, $query);

	$updated_posts = 0;
	$query = "SELECT posts FROM users WHERE username = '" . $user . "';";
	$result = mysqli_query($con, $query);

	while(list($posts) = $result->fetch_row()) {
		$updated_posts = $posts + 1;
	}

	$query = "UPDATE users SET posts = " . $updated_posts . " WHERE username = '" . $user . "'";
	$result = mysqli_query($con, $query);

	$query = "SELECT posts, comments FROM users where username = '" . $user . "'";
	$result = mysqli_query($con, $query);

	while(list($posts, $comments) = $result->fetch_row()) {
		$expire = time() + 60 * 60 * 24 * 7;
		setcookie("user", $user, $expire);
		setcookie("posts", $updated_posts, $expire);
		setcookie("comments", $comments, $expire);
	}

	mysqli_close($con);

	header( 'Location: index.php' ) ;
?>
