<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "PHP_and_mySQL";

try {
	$connection = new PDO("mysql:host=$server; dbname=$dbname", $username, $password);
	$sql = "CREATE TABLE signup_register(
		ID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		Fullname varchar(30),
		Username varchar(30),
		Email varchar(30) UNIQUE,
		Password varchar(255) NOT NULL,
		Confirm_password varchar(255) NOT NULL)";
	$connection->exec($sql);
		echo "Table Created";
} catch (Exception $e) {
		echo "Table creation failed: $e";
	}

try {
	$connection = new PDO("mysql:host=$server; dbname=$dbname", $username, $password);
	$sql = "CREATE TABLE Comment(
		Comment varchar(360))";
	$connection->exec($sql);
		echo "Table  for comments Created";
} catch (Exception $e) {
		echo "Table creation failed: $e";
	}
?>