<?php
/******************************************************************************
about.php
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
	<title>About | <?=$name ?></title>
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<meta charset="utf-8">
</head>
<body>
	<?php @include("div/head.php") ?>
	<div id="fixed">
	<br />
		<div id="content">
                        This website was made by students of N. M. College for as their project. <br />

                        <ul>
                        Things to work on:
                        <li>Commenting system           </li>
                        <li>Twitter style hashtags      </li>
                        <li>reddit.com style upvotes    </li>
                        </ul>                        

		</div>
		<?php @include("div/login.php") ?>
	</div>

<?php @include("div/foot.php") ?>
