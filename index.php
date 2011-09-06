<?php
/******************************************************************************
index.php
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

	$query = "SELECT post, post_title, l1, l2, l3, posted_by, comments, upvotes, date FROM posts";
	// where date > " . date('Y m d') . ";";

	$result = mysqli_query($con, $query)
	or die('Error querying database.');
?>

<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>Home | <?=$name ?></title>
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<meta charset="utf-8">
</head>
<body>
	<?php @include("div/head.php") ?>
	<div id="fixed">
	<br />
		<div id="content">
		<table border="1" width="100%">
		<tr><td>Title </td><td>Post </td><td>Labels </td><td>By </td><td># of comments </td><td># of upvotes </td><td>Date </td></tr>

		<?php
			while(list($post, $post_title, $l1, $l2, $l3, $posted_by, $comments, $upvotes, $date) = $result->fetch_row())
			{
				echo ("<tr><td>" . $post_title . "</td><td>" . $post . "</td><td>#" . $l1 . " #" . $l2 . " #" . $l3 . "</td><td>" . $posted_by . "</td><td>" . $comments . "</td><td>" . $upvotes . "</td><td>" . $date . "</td></tr>");
			}
		?>
		</table>
		</div>
		<?php @include("div/login.php") ?>
	</div>

<?php @include("div/foot.php") ?>
