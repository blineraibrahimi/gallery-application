<?php
	$server = "localhost";
	$username = "root";
	$password = "";

	try {
		$connection = new PDO("mysql:host=$server;", $username, $password );
		$sql = "CREATE DATABASE PHP_and_mySQL";
		$connection->exec($sql);
		echo "done!";
	} catch (Exception $e) {
		echo "database creation failed";
	}
?>