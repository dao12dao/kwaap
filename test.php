<?php
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
	<title>{PageName} | <?=$name ?></title>
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<meta charset="utf-8">
</head>
<body>
	<?php @include("div/head.php") ?>
	<div id="fixed">
	<br />
		<div id="content">
		</div>

		<?php @include("div/login.php") ?>
	</div>

<hr width="75%" />
<?=$useragent	?>
</body>
</html>