<?php
/******************************************************************************
login_action.php
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

	$username = $_POST['user'];
	$password = $_POST['pass'];

	$query = "SELECT username, posts, comments FROM users where username = '" . $username . "' AND password = '" . $password . "'";

	$result = mysqli_query($con, $query)
	or die('Error querying database.');

	while(list($username, $posts, $comments) = $result->fetch_row()) {
		$expire = time() + 60 * 60 * 24 * 7;		//Expire time = one week!
		setcookie("user", $username, $expire);
		setcookie("posts", $posts, $expire);
		setcookie("comments", $comments, $expire);
	}

	echo ($query . '<br>');
	mysqli_close($con);
	header( 'Location: index.php' );
?>