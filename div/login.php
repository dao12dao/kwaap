<?php
//Can only be embedded in the root files because of the dependency on <img src="images/.."> link
?>

<div id="login">
	<br />
	<img src="images/logo.layerless.png">

	<?php if (isset($_COOKIE["user"]))
	{
		echo "<br />";
		echo "Currently logged in as " . $_COOKIE["user"] . "<br />";
		echo "Posts: " . $_COOKIE["posts"] . "<br />";
		echo "Comments: " . $_COOKIE["comments"] . "<br />";
		echo 'Click here to <a href="logout_action.php">Logout </a>';
	}

	else {

	echo('<form id="login_form" method="post" action="login_action.php">
		<input type="text" 	name="user" id="user" /><br />
		<input type="password"	name="pass" id="pass" /><br />

		<input type="submit" value="Submit">
		<input type="reset"  value="Reset">
	</form>');
	} ?>
        <br />
        <br />
</div>
