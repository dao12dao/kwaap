<?php
/******************************************************************************
config.php
******************************************************************************/

//To be included in every root directory file.

	define('SITENAME', 'A Random College BBS');
	define('SITEURL', "http://execat.dyndns.org/~atm/bbs/");

	//Some variables to be used.
        $name   = SITENAME;
        $baseurl= SITEURL;
        $useragent      = $_SERVER['HTTP_USER_AGENT'];

	//Database connectivity
	$host   = "localhost";
	$user   = "admin";
	$pass   = "admin";
	$dbname	= "local_bbs";

	$con 	= new mysqli();
	$con	= mysqli_connect($host, $user, $pass, $dbname)
	or die('Error querying database. Please check if mysqld is up and running.');
	
	//mysqli_query($con, "SET NAMES utf8"); //Setting encoding to UTF8

	return ('OK');
?>
