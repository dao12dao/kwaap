<?php
/******************************************************************************
register.php
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

	if (!(isset($_COOKIE["user"])))
	{
		header( 'Location: error.php?error=UserNotLoggedIn' );
	}
?>

<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>Register | <?=$name ?></title>
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<meta charset="utf-8">
</head>
<body>
	<?php @include("div/head.php") ?>
	<div id="fixed">
	<br />
		<div id="content">
		<center>
		<h2><u>Add your content here </u></h2>
			<form id="register" method="post" action="post_action.php">
			<table>
				<tr><td><label>Post title	</label></td><td>:<input type="text" 	name="title" 	id="title"/>	<br /></td></tr>
				<tr><td><label>Post content:	</label></td><td><textarea	name="cont" 	id="cont" rows="5" cols="50"></textarea><br /></td></tr>
				<tr><td>Enter labels for the post: </td></tr>
			</table>
				<input type="text" name="l1" id="l1"><input type="text" name="l2" id="l2"><input type="text" name="l3" id="l3"><br />
				<input type="submit" value="Submit">
				<input type="reset"  value="Reset">
			</form>
		</center>
		</div>

		<?php @include("div/login.php") ?>
	</div>

<?php @include("div/foot.php") ?>