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
		<h2><u>Register here </u></h2>
			<form id="register" method="post" action="register_action.php">
			<table>
			<tr><td><label>Desired username </label></td><td>:<input type="text" 		name="user" 	id="user"       /><br /></td></tr>
			<tr><td><label>Password 	</label></td><td>:<input type="password" 	name="pass" 	id="pass"       /><br /></td></tr>
			<tr><td><label>Confirm password </label></td><td>:<input type="password"	name="cpass" 	id="cpass"      /><br /></td></tr>
			<tr><td><label>Email 		</label></td><td>:<input type="text"		name="email"	id="email"      size="32" /><br /></td></tr>
			</table>
				<input type="submit" value="Submit">
				<input type="reset"  value="Reset">
			</form>
		</center>
		</div>

		<?php @include("div/login.php") ?>
	</div>

<?php @include("div/foot.php") ?>