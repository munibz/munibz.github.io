<?php
	$dbhost = 'remotemysql.com:3306';
	$dbuser = 'CS6wHstbkJ';
	$dbpass = 'hLVOZjlYBf';
	$db = 'CS6wHstbkJ';
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

	if(! $conn ) {
		die('Could not connect: ' . mysqli_error());
	}
?>