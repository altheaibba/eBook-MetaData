<?php
	$dbHost = 'localhost';
	$dbName = 'assignment3';
	$dbUsername = 'root';
	$dbPassword = '';

	$dbConn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

	$sql = 'SELECT * FROM ebook_metadata';
	$query = mysqli_query($dbConn,$sql);
?>