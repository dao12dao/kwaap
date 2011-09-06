<?php
//Can only be embedded in the root directory because of the images/header.gif hardlinking
?>

<div id="head">
	<img src="images/header.gif" alt="Welcome :)" border="4px">
	<br />
	<br />
</div>

<ul class="navbar">
	<li><a href="index.php">	Home	</a></li>
	<li><a href="register.php">	Register</a></li>
	<?php if (isset($_COOKIE["user"]))
		echo '<li><a href="post.php">New post </a></li>'
	?>
	<li><a href="about.php">About Us</a></li>

	<?php
		if (isset($_COOKIE["user"]))
		{
			echo "<li>Welcome " . $_COOKIE["user"] . "!<br />";
			echo "Posts: " . $_COOKIE["posts"] . "<br />";
			echo "Comments: " . $_COOKIE["comments"] . "<br /></li>";

			echo '<li><a href="logout_action.php">Logout </a></li>';
		}
		else
			echo "Welcome guest!<br />";
	?>
</ul>
