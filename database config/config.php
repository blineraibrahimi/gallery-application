<?php
	session_start();
	
	$server = 'localhost';
	$username = 'root';
	$password  = '';
	$dbname = 'PHP_and_mySQL';

	try {
		$connection=new PDO("mysql:host=$server; dbname=$dbname;",$username,$password);
	// echo "Connected";
	} catch (Exception $e) {
		echo "Connection failed $e";
}
?>