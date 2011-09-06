<?php
/******************************************************************************
register_action.php
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
	$email_id = $_POST['email'];

	$query = "INSERT INTO users (username, password, email_id, posts, comments) values ('" . $username . "', '" . $password . "', '" . $email_id . "', 0, 0)";
	echo ($query . '<br>');

	$result = mysqli_query($con, $query)
	or die('Error querying database.');

	$expire = time() + 60 * 60 * 24 * 7;
	setcookie("user", $username, $expire);
	setcookie("posts", 0, $expire);
	setcookie("comments", 0, $expire);

	mysqli_close($con);

	header( 'Location: index.php' ) ;
?>
